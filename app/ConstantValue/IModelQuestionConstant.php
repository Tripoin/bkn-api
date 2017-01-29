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
    const QUESTION_DETAILS          = 'question_details';
    const JSON_QUESTION             = 'json_question';
    const ANSWER_CATEGORY_ID          = 'answer_category_id';

    /**
     * mst_question_category
     */
    const MST_QUESTION_CATEGORY_TABLE   = 'mst_question_category';

    /**
     * mst_question_type
     */
    const MST_QUESTION_TYPE_TABLE   = 'mst_question_type';

    /**
     * mst_question_seleted
     */
    const MST_QUESTION_SELECTED_TABLE   = 'mst_question_selected';
    const QUESTION_SELECTED_QUESTION_ID   = 'question_id';
    const QUESTION_SELECTED_QUESTIONNAIRE_REVIEW_ID = 'questionnaire_review_id';
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