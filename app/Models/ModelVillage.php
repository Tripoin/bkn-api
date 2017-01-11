<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 14:58
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelVillage extends Model
{
    protected $table = IApplicationConstant::VILLAGE_MODEL_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::VILLAGE_MODEL_COL_ID,
        IApplicationConstant::VILLAGE_MODEL_COL_CODE,
        IApplicationConstant::VILLAGE_MODEL_COL_NAME,
        IApplicationConstant::VILLAGE_MODEL_COL_ID_DISTRICT
    );
}