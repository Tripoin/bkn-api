<?php
/**
 * @package app/ConstantValue
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\ConstantValue;


interface IModelAddressConstant
{
    const ADDRESS_TABLE_NAME       = 'mst_address';
    const ADDRESS_COL_PROVINCE_ID  = 'province_id';
    const ADDRESS_COL_CITY_ID      = 'city_id';
    const ADDRESS_COL_DISTRICT_ID  = 'district_id';
    const ADDRESS_COL_VILLAGE_ID   = 'village_id';
    const ADDRESS_COL_ZIP_CODE     = 'zip_code';
}