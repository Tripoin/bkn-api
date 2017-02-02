<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Models;


use App\ConstantValue\IApplicationConstant;

class ModelRegistrationDetails extends ModelAuditTrails
{

    protected $table = IApplicationConstant::REGISTRATION_DETAIL_TABLE_NAME;

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
        IApplicationConstant::REGISTRATION_DETAIL_COL_USER_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_EMAIL,
        IApplicationConstant::REGISTRATION_DETAIL_COL_PHONE_NUMBER,
        IApplicationConstant::REGISTRATION_DETAIL_COL_GENDER,
        IApplicationConstant::REGISTRATION_DETAIL_COL_RELIGION_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_MARITAL_STATUS,
        IApplicationConstant::REGISTRATION_DETAIL_COL_DOB,
        IApplicationConstant::REGISTRATION_DETAIL_COL_POB,
        IApplicationConstant::REGISTRATION_DETAIL_COL_ADDRESS,
        IApplicationConstant::REGISTRATION_DETAIL_COL_VILLAGE_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_DISTRICT_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_CITY_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_PROVINCE_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_ZIP_CODE,
        IApplicationConstant::REGISTRATION_DETAIL_COL_FRONT_DEGREE,
        IApplicationConstant::REGISTRATION_DETAIL_COL_BEHIND_DEGREE,
        IApplicationConstant::REGISTRATION_DETAIL_COL_NIP,
        IApplicationConstant::REGISTRATION_DETAIL_COL_NIK,
        IApplicationConstant::REGISTRATION_DETAIL_COL_JSON_OCCUPATION,
        IApplicationConstant::REGISTRATION_DETAIL_COL_PARTICIPANT_TYPE_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_WORKING_UNIT_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_GOVERNMENT_CLASSIFICATION_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_DEGREE,
        IApplicationConstant::REGISTRATION_DETAIL_COL_COLLEGE,
        IApplicationConstant::REGISTRATION_DETAIL_COL_COLLEGE_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_FACULTY,
        IApplicationConstant::REGISTRATION_DETAIL_COL_STUDY_PROGRAM,
        IApplicationConstant::REGISTRATION_DETAIL_COL_STUDY_PROGRAM_ID,
        IApplicationConstant::REGISTRATION_DETAIL_COL_GRADUATION_YEAR,
        IApplicationConstant::REGISTRATION_DETAIL_COL_IS_CREATED,
        IApplicationConstant::REGISTRATION_DETAIL_COL_IS_APPROVED,
        IApplicationConstant::REGISTRATION_DETAIL_COL_APPROVED_MESSAGE
    );
}