<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 21:13
 */

namespace App\ConstantValue;


interface IModelMaterialConstant
{
    /**
     * mst_material_subject
     */
    const MATERIAL_SUBJECT_TABLE_NAME       = 'mst_material_subject';
    const DURATION          = 'duration';
    const UNIT_ID           = 'unit_id';
    const AUTHOR_NAME       = 'author_name';
    const COPYRIGHT_DATE    = 'copyright_date';

    /**
     * mst_material_support
     */
    const MATERIAL_SUPPORT_TABLE    = 'mst_material_support';

    /**
     * mst_material_support_room
     */
    const MATERIAL_SUPPORT_ROOM_TABLE   = 'mst_material_support_room';
    const MATERIAL_SUPPORT_BOOKING_ID   = 'booking_id';
    const MATERIAL_SUPPORT_ID           = 'material_support_id';
    const MATERIAL_SUPPORT_QUANTITY     = 'quantity';

}