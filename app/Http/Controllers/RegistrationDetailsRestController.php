<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use app\Models\ModelRegistrationDetails;
use App\Repository\Impl\RegistrationDetails\RegistrationDetailsRepository;
use app\Service\RegistrationDetails\IRegistrationDetailsService;

class RegistrationDetailsRestController extends ARestController
{

    private $registrationDetailsService;

    /**
     * @param RegistrationDetailsRepository $registrationDetailsRepository
     * @param IRegistrationDetailsService $registrationDetailsService
     */
    public function __construct(RegistrationDetailsRepository $registrationDetailsRepository, IRegistrationDetailsService $registrationDetailsService)
    {
        $this->repository = $registrationDetailsRepository;
        $this->registrationDetailsService = $registrationDetailsService;
    }

    public function getModel()
    {
        return new ModelRegistrationDetails();
    }

    public function singleRegistrationDetails(){
        $dataRegistration = (object)Request::json()->all();
        if (is_null($dataRegistration)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataRegistration = $this->classCaster->cast(get_class($this->getModel()), $dataRegistration);
                try{
                    if ($this->registrationDetailsService->registerSingle($dataRegistration) == 0){
                        return $this->restUtil->responseSuccessInsert();
                    }else{
                        return $this->restUtil->responseErrorInsert();
                    }
                }catch (\Exception $e){
                    Log::error('Registration details failed '.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    public function bulkRegistrationDetails(){
        $dataRegistration = (object)Request::json()->all();
        if (is_null($dataRegistration)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataRegistration = $this->classCaster->cast(get_class(array($this->getModel())), $dataRegistration);
                try{
                    if ($this->registrationDetailsService->registerBulk($dataRegistration) == 0){
                        return $this->restUtil->responseSuccessInsert();
                    }else{
                        return $this->restUtil->responseErrorInsert();
                    }
                }catch (\Exception $e){
                    Log::error('Registration details failed '.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    public function approveRegistrationDetails(){
        $dataRegistration = (object)Request::json()->all();
        if (is_null($dataRegistration)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataRegistration = $this->classCaster->cast(get_class($this->getModel()), $dataRegistration);
                try{
                    if ($this->registrationDetailsService->approveSingle($dataRegistration) == 0){
                        return $this->restUtil->responseSuccessInsert();
                    }else{
                        return $this->restUtil->responseErrorInsert();
                    }
                }catch (\Exception $e){
                    Log::error('Approve Registration details failed '.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    public function approveBulkRegistrationDetails(){
        $dataRegistration = (object)Request::json()->all();
        if (is_null($dataRegistration)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataRegistration = $this->classCaster->cast(get_class(array($this->getModel())), $dataRegistration);
                try{
                    if ($this->registrationDetailsService->approveBulk($dataRegistration) == 0){
                        return $this->restUtil->responseSuccessInsert();
                    }else{
                        return $this->restUtil->responseErrorInsert();
                    }
                }catch (\Exception $e){
                    Log::error('Approve Registration details failed '.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    public function declineRegistrationDetails(){
        $dataRegistration = (object)Request::json()->all();
        if (is_null($dataRegistration)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataRegistration = $this->classCaster->cast(get_class($this->getModel()), $dataRegistration);
                try{
                    if ($this->registrationDetailsService->declineSingle($dataRegistration) == 0){
                        return $this->restUtil->responseSuccessInsert();
                    }else{
                        return $this->restUtil->responseErrorInsert();
                    }
                }catch (\Exception $e){
                    Log::error('Registration details failed '.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }



    public function declineBulkRegistrationDetails(){
        $dataRegistration = (object)Request::json()->all();
        if (is_null($dataRegistration)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataRegistration = $this->classCaster->cast(get_class(array($this->getModel())), $dataRegistration);
                try{
                    if ($this->registrationDetailsService->declineBulk($dataRegistration) == 0){
                        return $this->restUtil->responseSuccessInsert();
                    }else{
                        return $this->restUtil->responseErrorInsert();
                    }
                }catch (\Exception $e){
                    Log::error('Decline Registration details failed '.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

}