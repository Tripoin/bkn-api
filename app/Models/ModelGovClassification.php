<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 2:29
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelGovClassification extends ModelAuditTrails
{
    protected $table = IApplicationConstant::GOV_CLASSIFICATION_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::GOV_CLASS_PARENT_ID
    );
}