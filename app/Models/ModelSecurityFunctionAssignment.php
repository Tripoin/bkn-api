<?php

/**
 * @project pip-api.
 * @since 9/7/2016 3:49 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelSecurityFunctionAssignment extends Model
{

    protected $table = IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array(
        IApplicationConstant::ID,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_FUNCTION_ID,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_GROUP_ID,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_ASSIGNMENT_ORDER,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_ACTION_TYPE
    );

}