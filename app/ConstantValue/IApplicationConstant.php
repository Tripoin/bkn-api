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
    IBaseModelConstant,
    IHTTPHeaderConstant,
    IAuditTrailConstant,
    IJSONConstant,
    IModelActionParameterConstant,
    IModelBudgetTypeConstant,
    IHTTPResponse,
    IModelCityConstant,
    IModelCertificateConstant,
    IModelDistrictConstant,
    IModelVillageConstant,
    IProvinceConstant,
    IModelAddressConstant,
    IModelAnswerCategoryConstant,
    IModelAnswerTypeConstant,
    IModelAssignmentLetterConstant,
    IModelAttachmentConstant,
    IModelCalcQuestionnaireConstant,
    IModelChecklistUsageConstant,
    IModelEvaluationConstant,
    IModelEvaluationAssessConstant,
    IModelEvaluationCategoryConstant,
    IModelAuthorConstant,
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
    IModelSubjectConstant,
    IModelSystemChoiceAnswerConstant,
    IModelTrainerConstant,
    IModelUnitConstant,
    IModelFunctionTypeConstant,
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