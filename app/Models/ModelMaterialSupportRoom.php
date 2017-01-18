<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:00
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelMaterialSupportRoom extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MATERIAL_SUPPORT_ROOM_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::MATERIAL_SUPPORT_BOOKING_ID,
        IApplicationConstant::MATERIAL_SUPPORT_ID,
        IApplicationConstant::MATERIAL_SUPPORT_QUANTITY
    );
}