<?php

/**
 * @project pip-rest.
 * @since 8/24/2016 11:19 AM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;

use App\ConstantValue\IApplicationConstant;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelSecurityUser extends Authenticatable
{
    protected $table = IApplicationConstant::MODEL_SECURITY_USER_TABLE_NAME;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}