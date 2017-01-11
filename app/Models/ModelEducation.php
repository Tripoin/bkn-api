<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 15:52
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelEducation extends Model
{
    protected $table = IApplicationConstant::MODEL_EDUCATION_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::MODEL_EDUCATION_COL_ID,
        IApplicationConstant::MODEL_EDUCATION_COL_CODE,
        IApplicationConstant::MODEL_EDUCATION_COL_NAME
    );
}