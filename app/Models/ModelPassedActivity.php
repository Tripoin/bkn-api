<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:15
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelPassedActivity extends ModelAuditTrails
{
    protected $table  = IApplicationConstant::MST_PASSED_ACTIVITY;

    protected $fillable = array
    (
        IApplicationConstant::PASSED_ACT_PARTICIPANT_ASSIGN,
        IApplicationConstant::PASSED_ACT_SUBJECT_NAME,
        IApplicationConstant::PASSED_ACT_SUBJECT_CATEGORY_NAME,
        IApplicationConstant::PASSED_ACT_SUBJECT_TYPE_NAME,
        IApplicationConstant::PASSED_ACT_GENERATION,
        IApplicationConstant::PASSED_ACT_LOCATION,
        IApplicationConstant::PASSED_ACT_START_ACTIVITY,
        IApplicationConstant::PASSED_ACT_END_ACTIVITY,
        IApplicationConstant::PASSED_ACT_YEAR_ACTIVITY,
        IApplicationConstant::PASSED_ACT_CERTIFICATE_ID
    );
}