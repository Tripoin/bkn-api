<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 14/09/2016
 * Time: 16:28
 */

namespace App\Http\Controllers;


use App\ConstantValue\IApplicationConstant;
use App\Dto\request\DTOBenefitRegistration;
use App\Http\Controllers\BaseRest\SimpleRestController;
use App\Http\Controllers\Inquiry\InquiryService;
use App\Http\Controllers\Transaction\ICancelProvider;
use App\Repository\Impl\Benefit\BenefitProvider\BenefitProviderRepository;
use App\Repository\Impl\Benefit\BenefitProvider\BenefitProviderStRepository;
use App\Repository\Impl\Benefit\BenefitRepository;
use App\Repository\Impl\Benefit\CancelBenefit\CancelBenefitRepository;
use App\Repository\Impl\ProviderDevice\ProviderDeviceRepository;
use App\Repository\Impl\ProviderDevice\ProviderDeviceStRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class CancelProviderRestController extends SimpleRestController implements ICancelProvider
{
    protected $repoBenefit;
    protected $repoProvider;
    protected $repoProviderDevice;
    protected $repoStProvider;
    protected $repoStProviderDevice;
    protected $repoTrxProviderCancel;
    protected $inqProvider;
    protected $inqProviderCancel;

    /**
     * @param BenefitRepository $benefitRepository
     * @param BenefitProviderRepository $benefitProviderRepository
     * @param BenefitProviderStRepository $benefitProviderStRepository
     * @param ProviderDeviceRepository $providerDeviceRepository
     * @param ProviderDeviceStRepository $providerDeviceStRepository
     * @param CancelBenefitRepository $cancelBenefitRepository
     */
    public function __construct(BenefitRepository $benefitRepository,
                                BenefitProviderRepository $benefitProviderRepository,
                                BenefitProviderStRepository $benefitProviderStRepository,
                                ProviderDeviceRepository $providerDeviceRepository,
                                ProviderDeviceStRepository $providerDeviceStRepository,
                                CancelBenefitRepository $cancelBenefitRepository
                                )
    {
        $this->repoProvider = $benefitProviderRepository;
        $this->repoStProvider = $benefitProviderStRepository;
        $this->repoProviderDevice = $providerDeviceRepository;
        $this->repoStProviderDevice = $providerDeviceStRepository;
        $this->repoTrxProviderCancel = $cancelBenefitRepository;
        $this->repoBenefit = $benefitRepository;

        $this->inqProvider = new InquiryService();
        $this->inqProvider->setRepository($this->repoProvider);
        $this->inqProviderCancel = new InquiryService();
        $this->inqProviderCancel->setRepository($this->repoTrxProviderCancel);
        parent::__construct();
    }

    public function listForCancellation()
    {
        return $this->inqProvider->hardCorePagination();
    }

    public function doCancellation()
    {
        $p_cancel = (object)Request::json()->all();
        if(is_null($p_cancel)){
            return $this->responseNoContent();
        }else{

            DB::beginTransaction();
            try{
                $data = $this->getProvider($p_cancel->id);
                $dto_ccl_provider = new DTOBenefitRegistration();
                foreach($data as $data_provider) {
                    $dto_ccl_provider->setId($data_provider -> id);
                    $dto_ccl_provider->setCode($data_provider->code);
                    $dto_ccl_provider->setName($data_provider->name);
                    $dto_ccl_provider->setProvince($data_provider->province);
                    $dto_ccl_provider->setCity($data_provider->city);
                    $dto_ccl_provider->setAddress($data_provider->address);
                    $dto_ccl_provider->setRegistrationDate($data_provider->registration_date);
                    $dto_ccl_provider->setRemarks($p_cancel->remarks);
                }
                $checkTrxCancel = $this->repoTrxProviderCancel->findById($p_cancel->id);
                $p_Entity = $this->classCaster->cast(get_class($this->repoTrxProviderCancel->getModel()), $dto_ccl_provider);
                if(is_null($checkTrxCancel)){
                    $this->repoTrxProviderCancel->insertTrxCancel($p_Entity);
                }else{
                    $this->repoTrxProviderCancel->updateTrxCancel($p_Entity);
                }
                $this->repoProvider->getModel()->where(IApplicationConstant::ID,$p_cancel->id)
                    ->update([IApplicationConstant::BENEFIT_PROVIDER_COL_ONPRO => 2]);

                DB::commit();
                return response()->json(
                    IApplicationConstant::SUCCESS_UPDATE,
                    http_response_code(IApplicationConstant::HTTP_RESPONSE_OK));
            }catch (\Exception $e){
                DB::rollback();
                print_r($e->getMessage());
            }

        }
    }

    public function listForApprovedCancel()
    {
        return $this->inqProviderCancel->hardCorePagination();

    }

    public function approveCancellation()
    {
        $p_ID = Request::json()->all();
        if(is_null($p_ID)){
            return $this->responseNoContent();
        }else{
            DB::beginTransaction();
            try{
                $this->repoTrxProviderCancel->approval($p_ID);

                DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                $this->repoBenefit->getModel()
                    ->whereIn(IApplicationConstant::MODEL_BENEFIT_COL_PROVIDER, $p_ID)
                    ->delete();
                DB::statement('SET FOREIGN_KEY_CHECKS=1;');

                $this->repoProviderDevice->getModel()
                    ->whereIn(IApplicationConstant::PROVIDER_DEVICE_COL_PROVIDER_ID, $p_ID)->delete();
                $this->repoStProviderDevice->getModel()
                    ->whereIn(IApplicationConstant::PROVIDER_DEVICE_COL_PROVIDER_ID, $p_ID)->delete();
                $this->repoProvider->getModel()
                    ->whereIn(IApplicationConstant::ID, $p_ID)->delete();
                $this->repoStProvider->getModel()
                    ->whereIn(IApplicationConstant::ID, $p_ID)->delete();

                DB::commit();
                return response()->json(
                    IApplicationConstant::SUCCESS_UPDATE,
                    http_response_code(IApplicationConstant::HTTP_RESPONSE_OK));
            }catch (\Exception $e){
                DB::rollback();
                print_r($e->getMessage());
            }

        }
    }

    public function rejectCancellation()
    {
        $p_cancel = (object)Request::json()->all();
        if(is_null($p_cancel)){
            return $this->responseNoContent();
        }else{
            DB::beginTransaction();
            try{
                $this->repoTrxProviderCancel->rejected($p_cancel);
                $this->repoProvider->updateOnProcess($p_cancel->id, 0);
                $this->repoStProvider->getModel()
                    ->whereIn(IApplicationConstant::ID, $p_cancel->id)
                    ->update([
                        IApplicationConstant::ST_BENEFIT_PROVIDER_STAGING_TYPE => IApplicationConstant::STAGING_TYPE_EDIT,
                        IApplicationConstant::APPROVAL_STATUS => IApplicationConstant::REJECTED
                    ]);
                DB::commit();
                return response()->json(
                    IApplicationConstant::SUCCESS_UPDATE,
                    http_response_code(IApplicationConstant::HTTP_RESPONSE_OK));
            }catch (\Exception $e){
                DB::rollback();
                Log::error('Cancel Provider Rest Controller -> Error reject cancellation '.$e->getMessage());
            }
        }
    }

    public function advancedPagination()
    {
        return $this->inqProviderCancel->advancedPagination();
    }

    public function getProvider($data_id){
        return $this->repoProvider->getModel()
            ->where(IApplicationConstant::ID, $data_id)
            ->get();
    }

}