<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 0:45
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelCertificate extends ModelAuditTrails
{
    protected $table       = IApplicationConstant::CERTIFICATE_TABLE_NAME;

    protected $fillable    = array
    (
        IApplicationConstant::SIGNATURE1,
        IApplicationConstant::SIGANTURE2,
        IApplicationConstant::EXPIRED
    );
}