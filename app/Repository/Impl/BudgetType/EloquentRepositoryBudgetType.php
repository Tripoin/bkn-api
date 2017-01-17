<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
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