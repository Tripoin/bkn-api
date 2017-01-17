<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 06/09/2016
 * Time: 18:10
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelDistrict extends ModelAuditTrails
{
    protected $table =  IApplicationConstant::DISTRICT_MODEL_NAME;

    protected $fillable = array
    (
        IApplicationConstant::DISTRICT_MODEL_COL_ID_CITY
    );
}