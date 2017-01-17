<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 20:00
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelGovernmentAgency extends ModelAuditTrails
{

    protected $table = IApplicationConstant::GOV_AGENCY_TABLE_NAME;

}