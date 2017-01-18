<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 18:05
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelQuestionType extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_QUESTION_TYPE_TABLE;
}