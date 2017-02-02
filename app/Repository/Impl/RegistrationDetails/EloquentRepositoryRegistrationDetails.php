<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */


namespace App\Repository\Impl\RegistrationDetails;

use app\Models\ModelRegistrationDetails;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EloquentRepositoryRegistrationDetails extends ABaseRepository implements RegistrationDetailsRepository
{

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelRegistrationDetails();
    }

    /**
     * @param $dataRegistration
     * @return int
     */
    public function singleRegistrationDetails($dataRegistration)
    {
        if (is_null($dataRegistration)){
            return -1;
        }
        try{
            DB::beginTransaction();
            $dataRegistration->user_id = $this->userRepository->getUserLoggedIn()->id;
            parent::insert($dataRegistration);
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }

    /**
     * @param $dataRegistration
     * @return mixed -1 : failed, 0 success
     */
    public function bulkRegistrationDetails(array $dataRegistration)
    {
        if (is_null($dataRegistration)){
            return -1;
        }
        try{
            DB::beginTransaction();
            foreach($dataRegistration as $data){
                $data->user_id = $this->userRepository->getUserLoggedIn()->id;
                parent::insert($data);
            }
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }

    /**
     * @param $idRegistrationDetails
     * @return mixed -1 : failed, 0 success
     */
    public function approveSingleRegistrationDetails($idRegistrationDetails)
    {
        if (is_null($idRegistrationDetails)){
            return -1;
        }
        try{
            DB::beginTransaction();
            $dataRegistrationDetails = $this->findById($idRegistrationDetails);
            $dataRegistrationDetails->is_approved = 1;
            $this->update($dataRegistrationDetails);
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }

    /**
     * @param $idRegistrationDetails
     * @return mixed -1 : failed, 0 success
     */
    public function declineBulkRegistrationDetails(array $idRegistrationDetails)
    {
        if (is_null($idRegistrationDetails)){
            return -1;
        }
        try{
            DB::beginTransaction();
            foreach($idRegistrationDetails as $id){
                $dataRegistrationDetails = $this->findById($id);
                $dataRegistrationDetails->is_approved = 0;
                $this->update($dataRegistrationDetails);
            }
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }

    /**
     * @param $idRegistrationDetails
     * @return mixed -1 : failed, 0 success
     */
    public function approveBulkRegistrationDetails($idRegistrationDetails)
    {
        if (is_null($idRegistrationDetails)){
            return -1;
        }
        try{
            DB::beginTransaction();
            foreach($idRegistrationDetails as $id){
                $dataRegistrationDetails = $this->findById($id);
                $dataRegistrationDetails->is_approved = 1;
                $this->update($dataRegistrationDetails);
            }
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }

    /**
     * @param $idRegistrationDetails
     * @return mixed -1 : failed, 0 success
     */
    public function declineSingleRegistrationDetails($idRegistrationDetails)
    {
        if (is_null($idRegistrationDetails)){
            return -1;
        }
        try{
            DB::beginTransaction();
            $dataRegistrationDetails = $this->findById($idRegistrationDetails);
            $dataRegistrationDetails->is_approved = 1;
            $this->update($dataRegistrationDetails);
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }
}