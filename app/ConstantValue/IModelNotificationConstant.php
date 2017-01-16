<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 21:20
 */

namespace App\ConstantValue;


interface IModelNotificationConstant
{
    const NOTIFICATION_TABLE    = 'mst_notification';

    const NOTIFICATION_TITLE    = 'notification_title';
    const NOTIFICATION_MESSAGE  = 'notification_message';
    const TO_USER_PROFILE_ID    = 'to_user_profile_id';
    const FROM_USER_PROFILE_ID  = 'from_user_profile_id';
    const NOTIFICATION_DATE     = 'notification_date';
    const NOTIFICATION_READ     = 'notification_read';
}