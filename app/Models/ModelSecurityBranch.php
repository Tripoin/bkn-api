<?php

/**
 * @project pip-api.
 * @since 9/7/2016 4:03 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelSecurityBranch extends Model
{

    protected $table = IApplicationConstant::MODEL_SECURITY_BRANCH_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array(
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::MODEL_SECURITY_BRANCH_COMPANY_ID
    );

}