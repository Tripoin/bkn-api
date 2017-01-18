<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 23:27
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelSubjectCategory extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_SUBJECT_CATEGORY_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::SUBJECT_TYPE_PARENT_ID,
        IApplicationConstant::SUBJECT_CATEGORY_ID
    );
}