<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/13/2017
 * Time: 11:50 PM
 */

namespace app\Repository\Impl\BudgetType;


use app\Models\ModelBudgetType;
use App\Repository\Impl\ABaseRepository;

class EloquentRepositoryBudgetType extends ABaseRepository implements BudgetTypeRepository
{

    public function  getModel()
    {
        return new ModelBudgetType();
    }
}