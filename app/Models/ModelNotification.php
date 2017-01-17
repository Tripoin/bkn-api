<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:01
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelNotification extends ModelAuditTrails
{
    protected $table = IApplicationConstant::NOTIFICATION_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::NOTIFICATION_TITLE,
        IApplicationConstant::NOTIFICATION_MESSAGE,
        IApplicationConstant::TO_USER_PROFILE_ID,
        IApplicationConstant::FROM_USER_PROFILE_ID,
        IApplicationConstant::NOTIFICATION_DATE,
        IApplicationConstant::NOTIFICATION_READ
    );
}