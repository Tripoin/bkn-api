<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/13/2017
 * Time: 11:45 PM
 */

namespace app\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelBudgetType extends Model
{
    protected $table = IApplicationConstant::BUDGET_TYPE_TABLE_NAME;

}