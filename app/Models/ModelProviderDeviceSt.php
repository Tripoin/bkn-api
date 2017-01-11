<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 11:15
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelProviderDeviceSt extends Model
{
    protected $table = IApplicationConstant::ST_PROVIDER_DEVICE_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::ST_PROVIDER_DEVICE_COL_PROVIDER_ID,
        IApplicationConstant::ST_PROVIDER_DEVICE_COL_DEVICE_SN
    );
}