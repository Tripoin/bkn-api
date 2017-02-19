<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\BudgetType;


use App\Models\ModelBudgetType;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryBudgetType extends ABaseRepository implements BudgetTypeRepository
{
    /**
     * EloquentRepositoryBudgetType constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }



    public function  getModel()
    {
        return new ModelBudgetType();
    }




}