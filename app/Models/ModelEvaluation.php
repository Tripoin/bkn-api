<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 19:59
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelEvaluation extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_EVALUATION_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::EVALUATION_RATE_VALUE
    );
}