<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 5:14 PM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelWorkingUnit extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_WORKING_UNIT_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::WORKING_UNIT_GOVERNMENT_AGENCIES_ID,
        IApplicationConstant::WORKING_UNIT_ADDRESS_ID,
        IApplicationConstant::WORNKING_UNIT_CONTACT_ID
    );
}