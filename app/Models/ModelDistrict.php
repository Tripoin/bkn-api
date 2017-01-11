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

class ModelDistrict extends Model
{
    protected $table =  IApplicationConstant::DISTRICT_MODEL_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::DISTRICT_MODEL_COL_ID,
        IApplicationConstant::DISTRICT_MODEL_COL_CODE,
        IApplicationConstant::DISTRICT_MODEL_COL_NAME,
        IApplicationConstant::DISTRICT_MODEL_COL_ID_CITY
    );
}