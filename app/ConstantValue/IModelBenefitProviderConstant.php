<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 08/09/2016
 * Time: 11:14
 */

namespace App\ConstantValue;


interface IModelBenefitProviderConstant
{
    /**
     * mda_benefit_provider constant
     */
    const BENEFIT_PROVIDER_TABLE_NAME       = "mda_benefit_provider";
    const BENEFIT_PROVIDER_COL_PROVINCE     = "province";
    const BENEFIT_PROVIDER_COL_CITY         = "city";
    const BENEFIT_PROVIDER_COL_ADDRESS      = "address";
    const BENEFIT_PROVIDER_COL_REG_DATE     = "registration_date";
    const BENEFIT_PROVIDER_COL_APPR_STATUS   = "approval_status";
    const BENEFIT_PROVIDER_COL_APPR_DATE    = "approval_date";
    const BENEFIT_PROVIDER_COL_APPROVER     = "approver";
    const BENEFIT_PROVIDER_COL_ONPRO        = "onprocess";
    const BENEFIT_PROVIDER_COL_REMARK       = "remark";

    /**
     * st_mda_benefit_provider constant
     */
    const ST_BENEFIT_PROVIDER_TABLE_NAME        = "st_mda_benefit_provider";
    const ST_BENEFIT_PROVIDER_STAGING_TYPE      = "staging_type";


    /**
     * trx_cancel_provider constant
     */
    const TRX_CANCEL_PROVIDER_TABLE_NAME = "trx_pembatalan_lembaga";
    const TRX_CANCEL_PROVIDER_COL_PROVINCE     = "province";
    const TRX_CANCEL_PROVIDER_COL_CITY         = "city";
    const TRX_CANCEL_PROVIDER_ADDRESS      = "address";
    const TRX_CANCEL_PROVIDER_REG_DATE     = "registration_date";
    const TRX_CANCEL_PROVIDER_COL_REMARK       = "remarks";
    const TRX_CANCEL_PROVIDER_COL_CANCEL_DATE  = "cancellation_date";
}