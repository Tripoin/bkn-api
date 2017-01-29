<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 3:05 PM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;
use App\Repository\IGenericRepository;

class ModelQuestionSelected extends ModelAuditTrails
{
    protected $table     = IApplicationConstant::MST_QUESTION_SELECTED_TABLE;

    protected $fillable  = array
    (
        IApplicationConstant::QUESTION_SELECTED_QUESTION_ID,
        IApplicationConstant::QUESTION_SELECTED_QUESTIONNAIRE_REVIEW_ID
    );
}