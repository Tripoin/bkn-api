<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 11:06
 */

namespace App\ConstantValue;


interface IModelProviderDeviceConstant
{
    const PROVIDER_DEVICE_TABLE_NAME = "mda_provider_device";
    const PROVIDER_DEVICE_COL_PROVIDER_ID = "provider_id";
    const PROVIDER_DEVICE_COL_DEVICE_SN = "device_sn";

    const ST_PROVIDER_DEVICE_TABLE_NAME = "st_mda_provider_device";
    const ST_PROVIDER_DEVICE_COL_PROVIDER_ID = "provider_id";
    const ST_PROVIDER_DEVICE_COL_DEVICE_SN = "device_sn";
}