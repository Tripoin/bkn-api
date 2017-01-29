<?php
/**
 * @package app/Models
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelAddress extends ModelAuditTrails
{
    protected $table = IApplicationConstant::ADDRESS_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::ADDRESS_COL_PROVINCE_ID,
        IApplicationConstant::ADDRESS_COL_CITY_ID,
        IApplicationConstant::ADDRESS_COL_DISTRICT_ID,
        IApplicationConstant::ADDRESS_COL_VILLAGE_ID,
        IApplicationConstant::ADDRESS_COL_ZIP_CODE,
    );
}