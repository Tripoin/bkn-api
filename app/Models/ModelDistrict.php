<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 4:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
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