<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 4:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
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