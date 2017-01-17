<?php

/**
 * @package app/ConstantValue
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\ConstantValue;

interface IApplicationConstant extends
    IApplicationPropertyConstant,
    IApplicationParameterConstant,
    IGroupModelConstant,
    IHTTPHeaderConstant,
    IAuditTrailConstant,
    IJSONConstant,
    IModelAddressConstant,
    IModelActionParameterConstant,
    IModelBudgetTypeConstant,
    IHTTPResponse,
    IModelCityConstant,
    IModelCertificateConstant,
    IModelDistrictConstant,
    IModelVillageConstant,
    IModelRoomConstant,
    IProvinceConstant,
    IModelSecurityBranchConstant,
    IModelSecurityFunctionConstant,
    IModelSecurityFunctionAssignmentConstant,
    IModelSecurityGroupConstant,
    IModelSecurityProfileConstant,
    IPunctuationConstant,
    ITransactionConstant,
    IQueryConstant,
    IModelSecurityUserConstant,
    IViewConstant,
    IValidationConstant {
    const APPLICATION_CRYPT = "PIP-Dev!23TelkomS1gma";
}