<?php

/**
 * @project pip-api.
 * @since 9/7/2016 2:21 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelSecurityFunction extends Model
{

    protected $table = IApplicationConstant::MODEL_SECURITY_FUNCTION_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array(
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_URL,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_ORDER,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_LEVEL,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_STYLE,
        IApplicationConstant::MODEL_SECURITY_FUNCTION_PARENT_ID
    );

}