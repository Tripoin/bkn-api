<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 13/09/2016
 * Time: 14:12
 */

namespace App\Http\Controllers;


use App\ConstantValue\IApplicationConstant;
use App\Dto\Entity\DTOPaging;
use App\Dto\request\DTOBenefitprovider;
use App\Dto\request\DTOMDAProvider;
use App\Http\Controllers\BaseRest\SimpleRestController;
use App\Http\Controllers\Inquiry\InquiryService;
use App\Http\Controllers\Transaction\IEditedProvider;
use App\Models\ModelBenefitProviderStaging;
use App\Models\ModelProviderDeviceSt;
use App\Repository\Impl\Benefit\BenefitProvider\BenefitProviderRepository;
use App\Repository\Impl\Benefit\BenefitProvider\BenefitProviderStRepository;
use App\Repository\Impl\ProviderDevice\ProviderDeviceRepository;
use App\Repository\Impl\ProviderDevice\ProviderDeviceStRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class EditProviderRestController extends SimpleRestController implements IEditedProvider
{
    protected $repoProvider;
    protected $repoProviderDevice;
    protected $repoStProvider;
    protected $repoStProviderDevice;
    protected $inqProviderStaging;
    protected $inqProvider;

    /**
     * @param BenefitProviderRepository $benefitProviderRepository
     * @param BenefitProviderStRepository $benefitProviderStRepository
     * @param ProviderDeviceRepository $providerDeviceRepository
     * @param ProviderDeviceStRepository $providerDeviceStRepository
     */
    public function __construct(BenefitProviderRepository $benefitProviderRepository,
                                BenefitProviderStRepository $benefitProviderStRepository,
                                ProviderDeviceRepository $providerDeviceRepository,
                                ProviderDeviceStRepository $providerDeviceStRepository)
    {
        $this->repoProvider = $benefitProviderRepository;
        $this->repoStProvider = $benefitProviderStRepository;
        $this->repoProviderDevice = $providerDeviceRepository;
        $this->repoStProviderDevice= $providerDeviceStRepository;

        $this->inqProviderStaging = new InquiryService();
        $this->inqProviderStaging->setRepository($this->repoStProvider);

        $this->inqProvider = new InquiryService();
        $this->inqProvider->setRepository($this->repoProvider);

        parent::__construct();
    }


    /**
     * list benefit provider for for edit
     * @return mixed
     */
    public function listEditWithPagination(){
        return $this->inqProvider->hardCorePagination();
    }

    /**
     * list benefit provider for approve
     * @return mixed
     */
    public function listStagingWithPagination(){
        return $this->inqProviderStaging->hardCorePagination();
    }

    /**
     * list benefit provider(edited) inquery
     * @return mixed
     */
    public function advancedPagination(){
        return $this->inqProviderStaging->advancedPagination();
    }

    /**
     * save benefit provider after(edited)
     * @return mixed
     */
    public function saveEdited()
    {
        $p_Entity = (object)Request::json()->all();
        $reg_date = $this->repoProvider->findById($p_Entity->id);
        if(is_null($p_Entity)){
            return $this->responseNoContent();
        }else{
            DB::beginTransaction();

            try{
                $dtoProvider = new DTOBenefitprovider();
                $dtoProvider->setId($p_Entity->id);
                $dtoProvider->setCode($p_Entity->code);
                $dtoProvider->setName($p_Entity->name);
                $dtoProvider->setCity($p_Entity->city);
                $dtoProvider->setProvince($p_Entity->province);
                $dtoProvider->setAddress($p_Entity->address);
                $dtoProvider->setRegistrationDate($reg_date->registration_date);

                $modelProviderStaging = $this->classCaster->cast(get_class(new ModelBenefitProviderStaging()), $dtoProvider);

                try{
                    $checkStaging = $this->repoStProvider->findById($p_Entity->id);
                    if(is_null($checkStaging)){
                        $dtoProviderDeviceStg = new DTOMDAProvider();
                        $dtoProviderDeviceStg->setProviderId($p_Entity->id);
                        $dtoProviderDeviceStg->setDeviceSn($p_Entity->device_sn);
                        $modelProviderDeviceStaging = $this->classCaster->cast(get_class(new ModelProviderDeviceSt()), $dtoProviderDeviceStg);

                        $this->repoStProvider->insertProviderStaging($modelProviderStaging);
                        $this->repoStProviderDevice->insertProviderDeviceStg($modelProviderDeviceStaging);

                    }else{
                        $dtoProviderDeviceStg = new DTOMDAProvider();
                        $dtoProviderDeviceStg->setProviderId($p_Entity->id);
                        $dtoProviderDeviceStg->setDeviceSn($p_Entity->device_sn);
                        $modelProviderDeviceStaging = $this->classCaster->cast(get_class(new ModelProviderDeviceSt()), $dtoProviderDeviceStg);

                        $this->repoStProvider->updateProviderStaging($modelProviderStaging);
                        $this->repoStProviderDevice->updateProviderDeviceStg($modelProviderDeviceStaging);
                    }
                    $this->repoProvider->updateOnProcess($p_Entity->id, 2);

                    DB::commit();

                    return $this->restUtil->responseSuccessUpdate();
                }catch (\Exception $e){
                    DB::rollback();
                    return $this->restUtil->responseErrorUpdate();
                }
            }catch (\Exception $e){
                DB::rollback();
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    /**
     * approve benefit provider after(edited)
     * @return mixed
     */
    public function approvedEdited()
    {
        $p_ID = Request::json()->all();
        if(is_null($p_ID)){
            return $this->restUtil->responseNoContent();
        }else{
            DB::beginTransaction();
            $this->repoStProvider->approval($p_ID);
            try{
                $data = $this->getProviderStaging($p_ID);
                $data_device = $this->getProviderDeviceStaging($p_ID);

                foreach($data as $data_staging){
                    $this->repoProvider->getModel()
                        ->where(IApplicationConstant::ID,$data_staging->id)
                        ->update([IApplicationConstant::CODE => $data_staging->code,
                            IApplicationConstant::NAME => $data_staging->name,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_CITY => $data_staging->city,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_PROVINCE => $data_staging->province,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_ADDRESS => $data_staging->address,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_ONPRO => 0,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_APPROVER => $data_staging->approver,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_APPR_DATE => $data_staging->approval_date
                        ]);
                }

                foreach($data_device as $data_device_staging){
                    $this->repoProviderDevice->getModel()
                        ->where(IApplicationConstant::PROVIDER_DEVICE_COL_PROVIDER_ID, $data_device_staging->provider_id)
                        ->update([IApplicationConstant::PROVIDER_DEVICE_COL_DEVICE_SN => $data_device_staging->device_sn,
                            IApplicationConstant::MODIFIED_ON => $data_device_staging->modified_on,
                            IApplicationConstant::MODIFIED_BY => $data_device_staging->modified_by
                        ]);
                }

                DB::commit();
                return $this->restUtil->responseSuccessUpdate();

            }catch (\Exception $e){
                DB::rollback();
                return $this->restUtil->responseErrorUpdate();
            }
        }

    }

    /**
     * reject benefit provider after(edited)
     * @return mixed
     */
    public function rejectedEdited()
    {
        $p_ID = Request::json()->all();
        if(is_null($p_ID)){
            return $this->responseNoContent();
        }else{
            DB::beginTransaction();
            $this->repoStProvider->reject($p_ID);
            try{
                $data = $this->getProviderStaging($p_ID);
                foreach($data as $data_staging){
                    $this->repoProvider->getModel()
                        ->where(IApplicationConstant::ID,$data_staging->id)
                        ->update([IApplicationConstant::CODE => $data_staging->code,
                            IApplicationConstant::NAME => $data_staging->name,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_CITY => $data_staging->city,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_PROVINCE => $data_staging->province,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_ADDRESS => $data_staging->address,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_ONPRO => 0,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_APPROVER => $data_staging->approver,
                            IApplicationConstant::BENEFIT_PROVIDER_COL_APPR_DATE => $data_staging->approval_date
                        ]);
                }
                DB::commit();
                return $this->restUtil->responseSuccessUpdate();
            }catch (\Exception $e){
                DB::rollback();
                return $this->restUtil->responseErrorUpdate();
            }
        }
    }

    public function getProviderStaging($data_id){
        return $this->repoStProvider->getModel()
            ->whereIn(IApplicationConstant::ID, $data_id)
            ->get();
    }

    public function getProviderDeviceStaging($data_id){
        return $this->repoStProviderDevice->getModel()
            ->whereIn(IApplicationConstant::PROVIDER_DEVICE_COL_PROVIDER_ID, $data_id)
            ->get();
    }

}