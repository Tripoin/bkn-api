<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:12
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelParticipantAssignment extends ModelAuditTrails
{
    protected $table    = IApplicationConstant::MST_PARTICIPANT_ASSIGNMENT;

    protected $fillable = array
    (
        IApplicationConstant::PARTICIPANT_ID,
        IApplicationConstant::PARTICIPANT_ACTV_ID,
        IApplicationConstant::PARTICIPANT_IS_PASSED,
        IApplicationConstant::PARTICIPANT_EXPIRED
    );
}