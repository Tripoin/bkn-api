<?php
/**
 * @package app/Models
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelRoom extends ModelAuditTrails
{
    protected $table = IApplicationConstant::ROOM_TABLE_NAME;

}