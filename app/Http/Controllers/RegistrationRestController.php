<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelRegistration;
use App\Repository\Impl\Registration\RegistrationRepository;
use App\Service\Registration\IRegistrationService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class RegistrationRestController extends ARestController
{
    private $registrationService;

    /**
     * @param RegistrationRepository $registrationRepository
     * @param IRegistrationService $registrationService
     */
    public function __construct(RegistrationRepository $registrationRepository, IRegistrationService $registrationService)
    {
        $this->repository = $registrationRepository;
        $this->registrationService = $registrationService;
        $this->registrationService->setRepository($this->repository);
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelRegistration();
    }

    public function register(){
        $dataRegistration = (object)Request::json()->all();
        if (is_null($dataRegistration)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataRegistration = $this->classCaster->cast(get_class($this->getModel()), $dataRegistration);
                try{
                    if ($this->registrationService->register($dataRegistration) == 0){
                        return $this->restUtil->responseSuccessInsert();
                    }else{
                        return $this->restUtil->responseErrorInsert();
                    }
                }catch (\Exception $e){
                    Log::error('Registration failed '.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    public function approve(){
        $dataApproval = (object)Request::json()->all();
        if (is_null($dataApproval)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataApproval = $this->classCaster->cast(get_class($this->getModel()), $dataApproval);
                try{
                    if ($this->registrationService->approveRegistration($dataApproval) == 0){
                        return $this->restUtil->responseSuccessUpdate();
                    }else{
                        return $this->restUtil->responseErrorUpdate();
                    }
                }catch (\Exception $e){
                    Log::error('Approve Registration failed '.$e->getMessage());
                    return $this->restUtil->responseErrorUpdate();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    public function decline(){
        $dataDecline = (object)Request::json()->all();
        if (is_null($dataDecline)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataDecline = $this->classCaster->cast(get_class($this->getModel()), $dataDecline);
                try{
                    if ($this->registrationService->declineRegistration($dataDecline) == 0){
                        return $this->restUtil->responseSuccessUpdate();
                    }else{
                        return $this->restUtil->responseErrorUpdate();
                    }
                }catch (\Exception $e){
                    Log::error('Approve Registration failed '.$e->getMessage());
                    return $this->restUtil->responseErrorUpdate();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }
}