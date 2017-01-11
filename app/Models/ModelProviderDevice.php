<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 11:12
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelProviderDevice extends Model
{
    protected $table = IApplicationConstant::PROVIDER_DEVICE_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::PROVIDER_DEVICE_COL_PROVIDER_ID,
        IApplicationConstant::PROVIDER_DEVICE_COL_DEVICE_SN
    );
}