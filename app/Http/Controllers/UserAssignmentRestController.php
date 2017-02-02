<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Http\Requests\Request;
use app\Models\ModelUserAssignment;
use App\Repository\Impl\UserAssignmentRepository;
use app\Service\UserAssignment\IUserAssignmentService;

class UserAssignmentRestController extends ARestController
{

    private $userAssignmentService;

    public function __construct(UserAssignmentRepository $userAssignmentRepository, IUserAssignmentService $userAssignmentService)
    {
        $this->repository = $userAssignmentRepository;
        $this->userAssignmentService = $userAssignmentService;
    }

    public function getModel()
    {
        return new ModelUserAssignment();
    }

    public function makeAssignment(){
        $dataAssignment = (object)Request::json()->all();
        if (is_null($dataAssignment)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                $dataAssignment = $this->classCaster->cast(get_class($this->getModel()), $dataAssignment);
                try{
                    if ($this->userAssignmentService->makeAssignment($dataAssignment) == 0){
                        return $this->restUtil->responseSuccessInsert();
                    }else{
                        return $this->restUtil->responseErrorInsert();
                    }
                }catch (\Exception $e){
                    Log::error('User assignment failed'.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }
}