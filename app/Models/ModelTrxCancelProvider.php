<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 14/09/2016
 * Time: 16:03
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelTrxCancelProvider extends Model
{

    protected $table = IApplicationConstant::TRX_CANCEL_PROVIDER_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::TRX_CANCEL_PROVIDER_COL_PROVINCE,
        IApplicationConstant::TRX_CANCEL_PROVIDER_COL_CITY,
        IApplicationConstant::TRX_CANCEL_PROVIDER_ADDRESS,
        IApplicationConstant::TRX_CANCEL_PROVIDER_COL_REMARK,
        IApplicationConstant::TRX_CANCEL_PROVIDER_COL_CANCEL_DATE
    );
}