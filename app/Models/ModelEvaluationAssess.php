<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 20:01
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelEvaluationAssess extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_EVALUATION_ASSESS_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::EVALUATION_CATEGORY_ID
    );
}