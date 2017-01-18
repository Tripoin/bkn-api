<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:08
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelParticipant extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_PARTICIPANT;

    protected $fillable = array
    (
        IApplicationConstant::PARTICIPANT_USER_PROFILE_ID,
        IApplicationConstant::PARTICIPANT_NIP,
        IApplicationConstant::PARTICIPANT_NIK,
        IApplicationConstant::PARTICIPANT_JSON_OCCUPATION,
        IApplicationConstant::PARTICIPANT_TYPE_ID,
        IApplicationConstant::PARTICIPANT_GOV_AGENCIES_ID,
        IApplicationConstant::PARTICIPANT_IS_ALUMNUS
    );
}