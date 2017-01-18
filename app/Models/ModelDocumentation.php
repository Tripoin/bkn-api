<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 19:45
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelDocumentation extends ModelAuditTrails
{
    protected $table    = IApplicationConstant::DOC_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::DOC_IMAGE_URL,
        IApplicationConstant::ACTIVITY_ID
    );
}