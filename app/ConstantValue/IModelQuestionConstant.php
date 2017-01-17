<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 16/01/2017
 * Time: 23:02
 */

namespace App\ConstantValue;


interface IModelQuestionConstant
{
    /**
     * mst_question
     */
    const MST_QUESTION_TABLE        = 'mst_question';
    const QUESTION_CATEGORY_ID      = 'question_category_id';
    const QUESTION_TYPE_ID          = 'question_type_id';
    const QUESTION_DETAILS          = 'question_details';
    const JSON_QUESTION             = 'json_question';

    /**
     * mst_question_category
     */
    const MST_QUESTION_CATEGORY_TABLE   = 'mst_question_category';

    /**
     * mst_question_type
     */
    const MST_QUESTION_TYPE_TABLE   = 'mst_question_type';

    /**
     * mst_questionnaire
     */
    const MST_QUESTIONNAIRE_TABLE   = 'mst_questionnaire';
    const QUESTIONNAIRE_LVL_AKD_ID  = 'level_akd_id';
    const QUESTIONNAIRE_START       = 'questionnaire_start';
    const QUESTIONNAIRE_END         = 'questionnaire_end';
    const QUESTIONNAIRE_YEAR        = 'questionnaire_year';
    const QUESTIONNAIRE_JSON_REVIEW = 'json_review';
}