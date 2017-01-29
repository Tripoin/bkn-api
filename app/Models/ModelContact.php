<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 0:32
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelContact extends ModelAuditTrails
{
    protected $table    = IApplicationConstant::CONTACT_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::CONTACT_EMAIL1,
        IApplicationConstant::CONTACT_EMAIL2,
        IApplicationConstant::CONTACT_PHONE_NUMBER1,
        IApplicationConstant::CONTACT_PHONE_NUMBER2,
        IApplicationConstant::CONTACT_FAX
    );
}