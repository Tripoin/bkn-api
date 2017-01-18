<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 18/01/2017
 * Time: 0:57
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelSubjectType extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_SUBJECT_TYPE_TABLE;
}