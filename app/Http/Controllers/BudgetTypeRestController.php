<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/13/2017
 * Time: 11:48 PM
 */

namespace app\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use app\Models\ModelBudgetType;
use app\Repository\Impl\BudgetType\BudgetTypeRepository;

class BudgetTypeRestController extends ARestController
{


    /**
     * BudgetTypeRestController constructor.
     */
    public function __construct(BudgetTypeRepository $budgetTypeRepository)
    {
        $this->repository = $budgetTypeRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelBudgetType();
    }
}