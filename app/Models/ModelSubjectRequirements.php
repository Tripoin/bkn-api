<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 18/01/2017
 * Time: 0:58
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelSubjectRequirements extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_SUBJECT_REQUIREMENTS_TABLE;
}