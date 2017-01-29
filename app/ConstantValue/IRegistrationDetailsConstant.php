<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\ConstantValue;


interface IRegistrationDetailsConstant
{
    const REGISTRATION_DETAIL_TABLE_NAME = 'trx_registration_details';
    const REGISTRATION_DETAIL_COL_USER_ID = 'user_id';
    const REGISTRATION_DETAIL_COL_EMAIL = 'email';
    const REGISTRATION_DETAIL_COL_PHONE_NUMBER = 'phone_number';
    const REGISTRATION_DETAIL_COL_GENDER = 'gender';
    const REGISTRATION_DETAIL_COL_RELIGION_ID = 'religion_id';
    const REGISTRATION_DETAIL_COL_MARITAL_STATUS = 'marital_status';
    const REGISTRATION_DETAIL_COL_DOB = 'dob';
    const REGISTRATION_DETAIL_COL_POB = 'pob';
    const REGISTRATION_DETAIL_COL_ADDRESS = 'address';
    const REGISTRATION_DETAIL_COL_VILLAGE_ID = 'village_id';
}