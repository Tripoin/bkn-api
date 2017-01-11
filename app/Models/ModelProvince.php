<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 4:03 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelProvince extends Model
{

    protected $table = IApplicationConstant::MODEL_PROVINCE_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array(
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME
    );

}