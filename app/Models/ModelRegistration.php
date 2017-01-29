<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */


namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelRegistration extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MODEL_REGISTRATION_TABLE_NAME;
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
        IApplicationConstant::MODEL_REGISTRATION_COL_DELEGATION_NAME,
        IApplicationConstant::MODEL_REGISTRATION_COL_DELEGATION_EMAIL,
        IApplicationConstant::MODEL_REGISTRATION_COL_DELEGATION_PHONE_NUMBER,
        IApplicationConstant::MODEL_REGISTRATION_COL_DELEGATION_FAX,
        IApplicationConstant::MODEL_REGISTRATION_COL_DELEGATION_ADDRESS,
        IApplicationConstant::MODEL_REGISTRATION_COL_VILLAGE_ID,
        IApplicationConstant::MODEL_REGISTRATION_COL_DISTRICT_ID,
        IApplicationConstant::MODEL_REGISTRATION_COL_CITY_ID,
        IApplicationConstant::MODEL_REGISTRATION_COL_PROVINCE_ID,
        IApplicationConstant::MODEL_REGISTRATION_COL_WORKING_UNIT_ID,
        IApplicationConstant::MODEL_REGISTRATION_COL_MESSAGE_TITLE,
        IApplicationConstant::MODEL_REGISTRATION_COL_MESSAGE_CONTENT,
        IApplicationConstant::MODEL_REGISTRATION_COL_USER_ID,
        IApplicationConstant::MODEL_REGISTRATION_COL_APPROVED_MESSAGE,
    );
}