<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 19:55
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelFunctionType extends ModelAuditTrails
{

    protected $table    = IApplicationConstant::FUNCTION_TYPE_TABLE_NAME;

}