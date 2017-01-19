<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 4:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelCalcQuestionnaire extends ModelAuditTrails
{
    protected $table = IApplicationConstant::ANSWER_CATEGORY_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::DESCRIPTION,
        IApplicationConstant::STATUS,
        IApplicationConstant::CREATED_BY,
        IApplicationConstant::CREATED_ON,
        IApplicationConstant::MODIFIED_BY,
        IApplicationConstant::MODIFIED_ON,
        IApplicationConstant::CALC_QUESTIONNAIRE_QUESTIONNAIRE_ID,
        IApplicationConstant::CALC_QUESTIONNAIRE_PARTICIPANT_ID,
        IApplicationConstant::CALC_QUESTIONNAIRE_EXECUTE_DATE,
        IApplicationConstant::CALC_QUESTIONNAIRE_JSON_CALC,
        IApplicationConstant::CALC_QUESTIONNAIRE_QUESTIONNAIRE_RESULT,
    );
}