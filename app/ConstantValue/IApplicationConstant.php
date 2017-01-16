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
    IModelActionParameterConstant,
    IModelBudgetTypeConstant,
    IHTTPResponse,
    IModelCityConstant,
    IModelDistrictConstant,
    IModelVillageConstant,
    IProvinceConstant,
    IModelAddressConstant,
    IModelActionParameterConstant,
    IModelAuthorConstant,
    IModelBudgetTypeConstant,
    IModelCertificateConstant,
    IModelContactConstant,
    IModelDocumentationConstant,
    IModelFacilityConstant,
    IModelGovermentAgencyConstant,
    IModelGuestConstant,
    IModelLevelAkdConstant,
    IModelMaterialConstant,
    IModelNotificationConstant,
    IModelOrganizerConstant,
    IModelParticipantConstant,
    IModelPassedActivityConstant,
    IModelPostConstant,
    IModelQuestionConstant,
    IModelReligionConstant,
    IModelRoomConstant,
    IModelSubjectConstant,
    
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