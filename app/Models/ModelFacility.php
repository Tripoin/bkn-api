<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 19:50
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelFacility extends ModelAuditTrails
{

    protected $table        = IApplicationConstant::FACILITY_TABLE_NAME;

}