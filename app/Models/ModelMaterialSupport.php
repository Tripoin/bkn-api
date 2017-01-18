<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 1:59
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelMaterialSupport extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MATERIAL_SUPPORT_TABLE;
}