<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 06/09/2016
 * Time: 18:10
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelDistrict extends ModelAuditTrails
{
    protected $table =  IApplicationConstant::DISTRICT_MODEL_NAME;

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
        IApplicationConstant::DISTRICT_MODEL_COL_ID_CITY
    );
}