<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\UserAssignment;


use app\Models\ModelUserAssignment;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;
use App\Repository\Impl\UserAssignmentRepository;

class EloquentRepositoryUserAssignment extends ABaseRepository implements UserAssignmentRepository
{
    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function getModel()
    {
        return new ModelUserAssignment();
    }

    public function makeAssignment($dataAssignment)
    {
        if (is_null($dataAssignment)){
            return -1;
        }
        try{
            DB::beginTransaction();
            parent::insert($dataAssignment);
            DB::commit();
            return 0;
        }catch (\Exception $e){
            DB::rollback();
            Log::error($e->getTraceAsString());
            return -1;
        }
    }


}