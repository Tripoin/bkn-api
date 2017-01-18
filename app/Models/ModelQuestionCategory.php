<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 18:29
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelQuestionCategory extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_QUESTION_CATEGORY_TABLE;
}