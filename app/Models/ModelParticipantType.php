<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:14
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelParticipantType extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_PARTICIPANT_TYPE;
}