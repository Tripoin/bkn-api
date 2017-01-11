<?php
/**
 * @project pip-api.
 * @since 9/5/2016 3:00 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\ConstantValue;


interface IModelBenefitConstant
{
    const MODEL_BENEFIT_TABLE_NAME              = "mda_benefit";
    const MODEL_BENEFIT_COL_CITY                = 'city';
    const MODEL_BENEFIT_COL_BENEFIT_TYPE        = 'benefit_type';
    const MODEL_BENEFIT_COL_PROVIDER            = 'provider';
    const MODEL_BENEFIT_COL_NUMBER_OF_SESSION   = 'number_of_session';
    const MODEL_BENEFIT_COL_START_DATE          = 'start_date';
    const MODEL_BENEFIT_COL_END_DATE            = 'end_date';
}