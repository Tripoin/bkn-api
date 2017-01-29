<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/29/2017
 * Time: 10:00 AM
 */

namespace App\ConstantValue;


interface IModelRegistrationConstant
{

    const MODEL_REGISTRATION_NAME   = "registration";
    const MODEL_REGISTRATION_TABLE_NAME = "trx_registration";
    const MODEL_REGISTRATION_COL_DELEGATION_NAME = "delegation_name";
    const MODEL_REGISTRATION_COL_DELEGATION_EMAIL = "delegation_email";
    const MODEL_REGISTRATION_COL_DELEGATION_PHONE_NUMBER = "delegation_phone_number";
    const MODEL_REGISTRATION_COL_DELEGATION_FAX = "delegation_fax";
    const MODEL_REGISTRATION_COL_DELEGATION_ADDRESS = "delegation_address";
    const MODEL_REGISTRATION_COL_VILLAGE_ID = "village_id";
    const MODEL_REGISTRATION_COL_DISTRICT_ID = "district_id";
    const MODEL_REGISTRATION_COL_CITY_ID = "city_id";
    const MODEL_REGISTRATION_COL_PROVINCE_ID = "province_id";
    const MODEL_REGISTRATION_COL_WORKING_UNIT_ID = "working_unit_id";
    const MODEL_REGISTRATION_COL_MESSAGE_TITLE = "message_title";
    const MODEL_REGISTRATION_COL_MESSAGE_CONTENT = "message_content";
    const MODEL_REGISTRATION_COL_USER_ID = "user_id";
    const MODEL_REGISTRATION_COL_IS_APPROVED = "is_approved";
    const MODEL_REGISTRATION_COL_APPROVED_MESSAGE = "approved_message";
}