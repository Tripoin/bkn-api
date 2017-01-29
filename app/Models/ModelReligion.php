<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/24/17
 * Time: 11:12 PM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelReligion extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_RELIGION_TABLE;
}