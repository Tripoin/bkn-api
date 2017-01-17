<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 1:06
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelAuthor extends ModelAuditTrails
{
    protected $table  = IApplicationConstant::AUTHOR_TABLE_NAME;

}