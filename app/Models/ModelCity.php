<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 06/09/2016
 * Time: 11:08
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelCity extends ModelAuditTrails
{
    protected $table = IApplicationConstant::CITY_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::CITY_COL_PROVINCE_ID
    );
}