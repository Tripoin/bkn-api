<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 06/09/2016
 * Time: 11:08
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelCity extends ModelAuditTrails
{
    protected $table = IApplicationConstant::CITY_TABLE_NAME;

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
        IApplicationConstant::CITY_COL_PROVINCE_ID
    );
}