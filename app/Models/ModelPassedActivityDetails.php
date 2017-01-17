<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:20
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelPassedActivityDetails extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_PASSED_ACTIVITY_DETAILS;

    protected $fillable = array
    (
        IApplicationConstant::PASSED_ACTIVITY_ID,
        IApplicationConstant::PASSED_ACT_TRAINER_NAME,
        IApplicationConstant::PASSED_ACT_MTR_SUBJECT_NAME,
        IApplicationConstant::PASSED_ACT_DURATION,
        IApplicationConstant::PASSED_ACT_UNIT_ID
    );
}