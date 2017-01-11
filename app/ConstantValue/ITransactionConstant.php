<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 13/09/2016
 * Time: 10:32
 */

namespace App\ConstantValue;


interface ITransactionConstant
{
    const APPROVAL_STATUS = "approval_status";
    const APPROVAL_DATE = "approval_date";
    const APPROVER = "approver";

    const STATUS_NEW = 0;
    const STATUS_EDITED = 1;
    const STATUS_CANCEL = 2;

    const APPROVED = 1;
    const REJECTED = 2;

    const STAGING_TYPE_EDIT = 2;
    const STAGING_TYPE_CANCEL = 3;
}