<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/13/2017
 * Time: 11:45 PM
 */

namespace app\Models;


use App\ConstantValue\IApplicationConstant;

class ModelBudgetType extends ModelAuditTrails
{
    protected $table = IApplicationConstant::BUDGET_TYPE_TABLE_NAME;

}