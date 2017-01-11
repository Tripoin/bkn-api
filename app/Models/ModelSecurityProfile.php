<?php

/**
 * @project pip-api.
 * @since 9/7/2016 6:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelSecurityProfile extends Model
{

    protected $table = IApplicationConstant::MODEL_SECURITY_PROFILE_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array(
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::MODEL_SECURITY_PROFILE_FULL_NAME,
        IApplicationConstant::MODEL_SECURITY_PROFILE_BIRTH_DATE,
        IApplicationConstant::MODEL_SECURITY_PROFILE_EMAIL,
        IApplicationConstant::MODEL_SECURITY_PROFILE_PLACE_OF_BIRTH,
        IApplicationConstant::MODEL_SECURITY_PROFILE_PROFILE_IMG,
        IApplicationConstant::MODEL_SECURITY_PROFILE_GENDER,
        IApplicationConstant::MODEL_SECURITY_PROFILE_RELIGION,
        IApplicationConstant::MODEL_SECURITY_PROFILE_ADDRESS,
        IApplicationConstant::MODEL_SECURITY_PROFILE_MARRIAGE
    );

}