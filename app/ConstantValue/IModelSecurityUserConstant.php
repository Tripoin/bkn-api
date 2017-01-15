<?php
/**
 * @project pip-rest.
 * @since 8/24/2016 11:23 AM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\ConstantValue;


interface IModelSecurityUserConstant extends IAuditTrailConstant
{
    const MODEL_SECURITY_USER_NAME                              = "User";
    const MODEL_SECURITY_USER_TABLE_NAME                        = "sec_user";
    const MODEL_SECURITY_USER_COL_USER_CODE                     = "code";
    const MODEL_SECURITY_USER_COL_USER_PASSWORD                 = "password";
    const MODEL_SECURITY_USER_COL_USER_EXPIRED_DATE             = "expired_date";
    const MODEL_SECURITY_USER_COL_USER_LOGIN_STATUS             = "login_status";
    const MODEL_SECURITY_USER_COL_USER_FAILED_LOGIN             = "failed_login";
    const MODEL_SECURITY_USER_COL_USER_FIRST_LOGIN              = "first_login";
    const MODEL_SECURITY_USER_COL_USER_LAST_LOGIN               = "last_login";
    const MODEL_SECURITY_USER_COL_GROUP_ID                      = "group_id";
    const MODEL_SECURITY_USER_COL_DESCRIPTION                   = "description";
}