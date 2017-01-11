<?php

/**
 * @project pip-api.
 * @since 9/7/2016 3:38 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelSecurityGroup extends Model
{

    protected $table = IApplicationConstant::MODEL_SECURITY_GROUP_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array(
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::DESCRIPTION,
        IApplicationConstant::MODEL_SECURITY_GROUP_BRANCH_ID,
        IApplicationConstant::MODEL_SECURITY_GROUP_FIRST_MENU
    );

}