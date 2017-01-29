<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:14 PM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelUnit extends ModelAuditTrails
{
protected $table = IApplicationConstant::MST_UNIT_TABLE;

}