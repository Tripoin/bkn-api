<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 25/01/2017
 * Time: 19:43
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelCategoryAssess extends ModelAuditTrails
{
    protected $table = IApplicationConstant::CATEGORY_ASSESS_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::CATEGORY_ASSESS_PARENT_ID
    );
}