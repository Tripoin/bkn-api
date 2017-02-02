<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:39 PM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelSystemChoiceAnswer extends ModelAuditTrails
{
    protected $table     = IApplicationConstant::MST_CHOICE_ANSWER_TABLE;

    protected $fillable  = array
    (
        IApplicationConstant::QUESTION_ID
    );
}