<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 10:58
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelPostLanguage extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_POST_LANGUAGE_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::POST_LANGUAGE_POST_ID,
        IApplicationConstant::POST_LANGUAGE_ID
    );
}