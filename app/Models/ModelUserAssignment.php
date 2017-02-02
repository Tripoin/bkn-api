<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Models;


use App\ConstantValue\IApplicationConstant;

class ModelUserAssignment extends ModelAuditTrails
{

    protected $table = IApplicationConstant::MODEL_USER_ASSIGNMENT_TABLE_NAME;

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
        IApplicationConstant::MODEL_USER_ASSIGNMENT_USER_MAIN_ID,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_ACTIVITY_ID,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_EVALUATION_ID,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_QUESTIONNAIRE_ID,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_BOOKING_ID,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_ASSIGNMENT_LETTER_ID,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_CERTIFICATE_ID,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_EXPIRED_ACTIVITY,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_EXPIRED_EVALUATE,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_EXPIRED_QUESTIONNAIRE,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_EXECUTE_ACTIVITY,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_EXECUTE_EVALUATE,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_EXECUTE_QUESTIONNAIRE,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_IS_PASSED_ACTIVITY,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_IS_PASSED_EVALUATE,
        IApplicationConstant::MODEL_USER_ASSIGNMENT_IS_PASSED_QUESTIONNAIRE,
    );
}