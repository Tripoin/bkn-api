<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 20:02
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelEvaluationCategory extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_EVALUATION_CATEGORY_TABLE;
}