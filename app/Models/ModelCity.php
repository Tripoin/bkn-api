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

class ModelCity extends Model
{
    protected $table = IApplicationConstant::CITY_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::CITY_COL_ID,
        IApplicationConstant::CITY_COL_CODE,
        IApplicationConstant::CITY_COL_NAME,
        IApplicationConstant::CITY_COL_ID_PROVINCE
    );
}