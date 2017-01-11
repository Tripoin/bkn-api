<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 08/09/2016
 * Time: 14:48
 */

namespace App\Http\Controllers;

use App\Dto\request\DTOBenefitprovider;
use App\Dto\request\DTOMDAProvider;
use App\Http\Controllers\BaseRest\SimpleRestController;
use App\Http\Controllers\Inquiry\InquiryService;
use App\Http\Controllers\Transaction\IRegisterProvider;
use App\Models\ModelBenefitProvider;
use App\Models\ModelProviderDevice;
use App\Repository\Impl\Benefit\BenefitProvider\BenefitProviderRepository;
use App\Repository\Impl\ProviderDevice\ProviderDeviceRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class RegisterProviderRestController extends SimpleRestController implements IRegisterProvider
{
    protected $repoBenefitProvider;
    protected $repoProviderDevice;
    protected $inquiryService;

    public function __construct(BenefitProviderRepository $benefitProvider,
                                ProviderDeviceRepository $providerDeviceRepository)
    {
        $this->repoBenefitProvider = $benefitProvider;
        $this->repoProviderDevice = $providerDeviceRepository;

        $this->inquiryService = new InquiryService();
        $this->inquiryService->setRepository($this->repoBenefitProvider);

        parent::__construct();
    }

    /**
     * registration new benefit provider
     * @return mixed
     */
    public function registerNewProvider()
    {
        $p_Entity = (object)Request::json()->all();
        if(is_null($p_Entity)){
            return $this->restUtil->responseNoContent();
        }else{
            DB::beginTransaction();
            try{
                $dtoBenefitProvider = new DTOBenefitprovider();
                $dtoBenefitProvider->setCode($p_Entity->code);
                $dtoBenefitProvider->setName($p_Entity->name);
                $dtoBenefitProvider->setProvince($p_Entity->province);
                $dtoBenefitProvider->setCity($p_Entity->city);
                $dtoBenefitProvider->setAddress($p_Entity->address);
                $modelNewBenefitProvider = $this->classCaster->cast(get_class(new ModelBenefitProvider()), $dtoBenefitProvider);
                try{
                    $lastIdBenefitProvider = $this->repoBenefitProvider->insertNewBenefitData($modelNewBenefitProvider);
                    $dtoMDAProvider = new DTOMDAProvider();
                    $dtoMDAProvider->setProviderId($lastIdBenefitProvider->id);
                    $dtoMDAProvider->setDeviceSn($p_Entity->device_sn);
                    $modelMDAProvider = $this->classCaster->cast(get_class(new ModelProviderDevice()), $dtoMDAProvider);

                    $this->repoProviderDevice->insert($modelMDAProvider);
                    DB::commit();

                    return $this->restUtil->responseSuccessInsert();
                }catch (\Exception $e){
                    DB::rollback();
                    return $this->restUtil->responseErrorInsert();

                }
            }catch (\Exception $e){
                DB::rollback();
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    /**
     * approval new benefit provider
     * support collections approval
     * @return mixed
     */
    public function approvalRegisteredNewProvider()
    {
        $p_ID = Request::json()->all();
        if(is_null($p_ID)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                DB::beginTransaction();
                $this->repoBenefitProvider->approval($p_ID);
                DB::commit();
                return $this->restUtil->responseSuccessUpdate();
            }catch (\Exception $e){
                DB::rollback();
                return $this->restUtil->responseErrorUpdate();
            }
        }

    }

    /**
     * rejected new benefit provider
     * collection rejected
     * @return mixed
     */
    public function rejectNewProvider()
    {
        $p_ID = Request::json()->all();
        if(is_null($p_ID)){
            return $this->responseNoContent();
        }else{
            try{
                DB::beginTransaction();
                $this->repoBenefitProvider->reject($p_ID);
                DB::commit();
                return $this->restUtil->responseSuccessUpdate();
            }catch (\Exception $e){
                DB::rollback();
                return $this->restUtil->responseErrorUpdate();
            }
        }
    }

    public function listWithPagination()
    {
        return $this->inquiryService->hardCorePagination();
    }

    public function advancedPagination()
    {
        return $this->inquiryService->advancedPagination();
    }

}