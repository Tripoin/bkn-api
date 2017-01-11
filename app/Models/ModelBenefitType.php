<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 18:18
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelBenefitType extends Model
{
    protected $table = IApplicationConstant::MODEL_BENEFIT_TYPE_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::MODEL_BENEFIT_TYPE_COL_ID,
        IApplicationConstant::MODEL_BENEFIT_TYPE_COL_CODE,
        IApplicationConstant::MODEL_BENEFIT_TYPE_COL_NAME
    );
}