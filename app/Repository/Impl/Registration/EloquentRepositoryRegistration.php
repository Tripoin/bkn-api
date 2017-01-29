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
            Log::error("data reg null");
        }
        try{
            DB::beginTransaction();
            Log::error("start transac");
            $dataRegistration->user_id = $this->userRepository->getUserLoggedIn()->id;
            parent::insert($dataRegistration);
            DB::commit();
            Log::error("done transac");
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }
}