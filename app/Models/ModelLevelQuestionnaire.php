<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 1:51
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelLevelQuestionnaire extends ModelAuditTrails
{
    protected $table = IApplicationConstant::LEVEL_QUEST_TABLE_NAME;
}