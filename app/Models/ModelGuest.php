<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 20:06
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelGuest extends ModelAuditTrails
{
    protected $table     = IApplicationConstant::GUEST_TABLE_NAME;

    protected $fillable  = array
    (
        IApplicationConstant::NIK,
        IApplicationConstant::EMAIL,
        IApplicationConstant::PHONE_NUMBER,
        IApplicationConstant::ADDRESS
    );
}