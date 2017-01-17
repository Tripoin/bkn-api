<?php
/**
 * @package app/Models
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelCertificate extends ModelAuditTrails
{
    protected $table = IApplicationConstant::CERTIFICATE_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::DESCRIPTION,
        IApplicationConstant::STATUS,
        IApplicationConstant::CREATED_BY,
        IApplicationConstant::CREATED_ON,
        IApplicationConstant::MODIFIED_BY,
        IApplicationConstant::MODIFIED_ON,
        IApplicationConstant::CERTIFICATE_COL_EXPIRED,
        IApplicationConstant::CERTIFICATE_COL_SIGNATURE_1,
        IApplicationConstant::CERTIFICATE_COL_SIGNATURE_2,
    );
}