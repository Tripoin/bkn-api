<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\ConstantValue;


interface IModelUserAssignment
{

    const MODEL_USER_ASSIGNMENT_TABLE_NAME = 'mst_user_assignment';
    const MODEL_USER_ASSIGNMENT_USER_MAIN_ID = 'user_main_id';
    const MODEL_USER_ASSIGNMENT_ACTIVITY_ID = 'activity_id';
    const MODEL_USER_ASSIGNMENT_EVALUATION_ID = 'evaluation_id';
    const MODEL_USER_ASSIGNMENT_QUESTIONNAIRE_ID = 'questionnaire_id';
    const MODEL_USER_ASSIGNMENT_BOOKING_ID = 'booking_id';
    const MODEL_USER_ASSIGNMENT_ASSIGNMENT_LETTER_ID = 'assignment_letter_id';
    const MODEL_USER_ASSIGNMENT_CERTIFICATE_ID = 'certificate_id';
    const MODEL_USER_ASSIGNMENT_EXPIRED_ACTIVITY = 'expired_activity';
    const MODEL_USER_ASSIGNMENT_EXPIRED_EVALUATE = 'expired_evaluate';
    const MODEL_USER_ASSIGNMENT_EXPIRED_QUESTIONNAIRE = 'expired_questionnaire';
    const MODEL_USER_ASSIGNMENT_EXECUTE_ACTIVITY = 'execute_activity';
    const MODEL_USER_ASSIGNMENT_EXECUTE_EVALUATE = 'execute_evaluate';
    const MODEL_USER_ASSIGNMENT_EXECUTE_QUESTIONNAIRE = 'execute_questionnaire';
    const MODEL_USER_ASSIGNMENT_IS_PASSED_ACTIVITY = 'is_passed_activity';
    const MODEL_USER_ASSIGNMENT_IS_PASSED_EVALUATE = 'is_passed_evaluate';
    const MODEL_USER_ASSIGNMENT_IS_PASSED_QUESTIONNAIRE = 'is_passed_questionnaire';
}