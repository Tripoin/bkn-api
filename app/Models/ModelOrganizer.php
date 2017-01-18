<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:03
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelOrganizer extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_ORGANIZER_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::USER_PROFILE_ID,
        IApplicationConstant::MST_ORGANIZER_NIP,
        IApplicationConstant::MST_ORGANIZER_NIK
    );
}