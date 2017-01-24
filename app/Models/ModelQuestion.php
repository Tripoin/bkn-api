<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 11:02
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelQuestion extends ModelAuditTrails
{

    protected $table = IApplicationConstant::MST_QUESTION_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::QUESTION_CATEGORY_ID,
        IApplicationConstant::QUESTION_DETAILS,
        IApplicationConstant::JSON_QUESTION,
        IApplicationConstant::ANSWER_CATEGORY_ID


    );
}