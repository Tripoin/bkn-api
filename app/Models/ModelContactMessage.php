<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 19:35
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelContactMessage extends ModelAuditTrails
{

    protected $table = IApplicationConstant::CONTACT_MESSAGE_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::CONTACT_MESSAGE_GUEST_NAME,
        IApplicationConstant::CONTACT_MESSAGE_GUEST_EMAIL,
        IApplicationConstant::CONTACT_MESSAGE_SUBJECT,
        IApplicationConstant::CONTACT_MESSAGE_CONTENT
    );
}