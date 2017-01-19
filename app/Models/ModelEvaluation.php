<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 4:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelEvaluation extends ModelAuditTrails
{
    protected $table = IApplicationConstant::EVALUATION_TABLE_NAME;

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
        IApplicationConstant::EVALUATION_ACTIVITY_ID,
        IApplicationConstant::EVALUATION_RATE_VALUE
    );
}