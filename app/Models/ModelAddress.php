<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 14/01/2017
 * Time: 21:45
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelAddress extends ModelAuditTrails
{
    protected $table = IApplicationConstant::ADDRESS_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::ADDRESS_PROVINCE_ID,
        IApplicationConstant::ADDRESS_CITY_ID,
        IApplicationConstant::ADDRESS_DISTRICT_ID,
        IApplicationConstant::ADDRESS_VILLAGE_ID
    );
}