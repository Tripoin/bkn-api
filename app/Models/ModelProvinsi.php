<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 4:03 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelProvinsi extends Model
{

    protected $table = IApplicationConstant::MODEL_PROVINSI_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array(
        IApplicationConstant::MODEL_PROVINSI_COL_ID_PROVINSI,
        IApplicationConstant::MODEL_PROVINSI_COL_CODE,
        IApplicationConstant::MODEL_PROVINSI_COL_NAMA
    );

}