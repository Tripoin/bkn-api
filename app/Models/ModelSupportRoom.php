<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 12:09 AM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelSupportRoom extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_SUPPORT_ROOM_TABLE;
}