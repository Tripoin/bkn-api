<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 25/01/2017
 * Time: 20:02
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelCollege extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_COLLEGE_TABLE;
}