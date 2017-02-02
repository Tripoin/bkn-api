<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */


namespace App\Repository\Impl\Registration;

use App\Models\ModelRegistration;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EloquentRepositoryRegistration extends ABaseRepository implements RegistrationRepository
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
        return new ModelRegistration();
    }

    public function register($dataRegistration)
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

    public function approve($idRegistration)
    {
        if (is_null($idRegistration)){
            return -1;
        }
        try{
            DB::beginTransaction();
            $dataRegistration = $this->findById($idRegistration);
            $dataRegistration->is_approve = 1;
            parent::update($dataRegistration);
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }

    public function decline($idRegistration)
    {
        if (is_null($idRegistration)){
            return -1;
        }
        try{
            DB::beginTransaction();
            $dataRegistration = $this->findById($idRegistration);
            $dataRegistration->is_approve = 0;
            parent::update($dataRegistration);
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }
}