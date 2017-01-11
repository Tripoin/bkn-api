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
    IHTTPResponse,
    IModelBenefitConstant,
    IModelKecamatanConstant,
    IModelProvinsiConstant,
    IModelCityConstant,
    IModelDistrictConstant,
    IModelVillageConstant,
    IModelJobConstant,
    IModelEducationConstant,
    IModelBenefitTypeConstant,
    IModelBenefitProviderConstant,
    IModelProviderDeviceConstant,
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
