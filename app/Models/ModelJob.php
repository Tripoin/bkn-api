<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 15:40
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelJob extends Model
{
    protected $table = IApplicationConstant::MODEL_JOB_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::MODEL_JOB_COL_ID,
        IApplicationConstant::MODEL_JOB_COL_CODE,
        IApplicationConstant::MODEL_JOB_COL_NAME
    );
}