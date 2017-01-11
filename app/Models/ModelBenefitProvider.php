<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 08/09/2016
 * Time: 14:00
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use Illuminate\Database\Eloquent\Model;

class ModelBenefitProvider extends Model
{
    protected $table = IApplicationConstant::BENEFIT_PROVIDER_TABLE_NAME;

    public $timestamps = false;

    protected $fillable = array
    (
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::BENEFIT_PROVIDER_COL_CITY,
        IApplicationConstant::BENEFIT_PROVIDER_COL_PROVINCE,
        IApplicationConstant::BENEFIT_PROVIDER_COL_ADDRESS
    );
}