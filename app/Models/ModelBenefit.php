<?php

/**
 * @project pip-api.
 * @since 9/5/2016 2:59 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelBenefit extends Model
{
    protected $table = IApplicationConstant::MODEL_BENEFIT_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array(
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::DESCRIPTION,
        IApplicationConstant::MODEL_BENEFIT_COL_CITY,
        IApplicationConstant::MODEL_BENEFIT_COL_BENEFIT_TYPE,
        IApplicationConstant::MODEL_BENEFIT_COL_PROVIDER,
        IApplicationConstant::MODEL_BENEFIT_COL_NUMBER_OF_SESSION,
        IApplicationConstant::MODEL_BENEFIT_COL_START_DATE,
        IApplicationConstant::MODEL_BENEFIT_COL_END_DATE,
        IApplicationConstant::STATUS,
        IApplicationConstant::CREATED_ON,
        IApplicationConstant::CREATED_BY,
        IApplicationConstant::MODIFIED_ON,
        IApplicationConstant::MODIFIED_BY,
    );
}