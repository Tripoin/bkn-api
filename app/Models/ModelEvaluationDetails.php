<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 20:03
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelEvaluationDetails extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_EVALUATION_DETAILS_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::EVALUATION_ID,
        IApplicationConstant::EVALUATION_ASSESS_ID,
        IApplicationConstant::EVALUATION_PARTICIPANT_TOTAL,
        IApplicationConstant::EVALUATION_TOTAL_VALUE,
        IApplicationConstant::EVALUATION_RATE_VALUE
    );
}