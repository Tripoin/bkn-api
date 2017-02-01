<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 12:00 AM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelQuestionnaireReview extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_QUESTIONNAIRE_REVIEW_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::QUESTIONNAIRE_REVIEW_START,
        IApplicationConstant::QUESTIONNAIRE_REVIEW_END,
        IApplicationConstant::QUESTIONNAIRE_REVIEW_YEAR,
        IApplicationConstant::QUESTIONNAIRE_JSON_REVIEW


    );
}