<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 1:52
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelMaterialSubject extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MATERIAL_SUBJECT_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::DURATION,
        IApplicationConstant::UNIT_ID,
        IApplicationConstant::AUTHOR_NAME,
        IApplicationConstant::COPYRIGHT_DATE
    );
}