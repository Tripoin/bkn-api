<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Service;

use App\Repository\Impl\Address\AddressRepository;
use App\Repository\Impl\Address\EloquentRepositoryAddress;
use App\Repository\Impl\AnswerCategory\AnswerCategoryRepository;
use App\Repository\Impl\AnswerCategory\EloquentRepositoryAssignmentLetter;
use App\Repository\Impl\AnswerCategory\EloquentRepositoryEvaluationAssess;
use App\Repository\Impl\AnswerType\AnswerTypeRepository;
use App\Repository\Impl\AnswerCategory\EloquentRepositoryAnswerCategory;
use App\Repository\Impl\AnswerType\EloquentRepositoryAnswerType;
use App\Repository\Impl\AssignmentLetterRepository;
use App\Repository\Impl\Attachment\AttachmentRepository;
use App\Repository\Impl\Attachment\EloquentRepositoryAttachment;
use App\Repository\Impl\BudgetType\BudgetTypeRepository;
use App\Repository\Impl\BudgetType\EloquentRepositoryBudgetType;
use App\Repository\Impl\CalcQuestionnaire\CalcQuestionnaireRepository;
use App\Repository\Impl\CalcQuestionnaire\EloquentRepositoryCalcQuestionnaire;
use App\Repository\Impl\Certificate\CertificateRepository;
use App\Repository\Impl\Certificate\EloquentRepositoryCertificate;
use App\Repository\Impl\City\EloquentRepositoryCity;
use App\Repository\Impl\City\CityRepository;
use App\Repository\Impl\Contact\ContactRepository;
use App\Repository\Impl\Contact\EloquentRepositoryContact;
use App\Repository\Impl\ContactMessage\ContactMessageRepository;
use App\Repository\Impl\ContactMessage\EloquentRepositoryContactMessage;
use App\Repository\Impl\District\DistrictRepository;
use App\Repository\Impl\District\EloquentRepositoryDistrict;

use App\Repository\Impl\Evaluation\EloquentRepositoryEvaluation;
use App\Repository\Impl\Evaluation\EvaluationRepository;
use App\Repository\Impl\EvaluationAssess\EvaluationAssessRepository;
use App\Repository\Impl\EvaluationCategory\EloquentRepositoryEvaluationCategory;
use App\Repository\Impl\EvaluationCategory\EvaluationCategoryRepository;
use App\Repository\Impl\Facility\EloquentFacilityRepository;
use App\Repository\Impl\Facility\FacilityRepository;
use App\Repository\Impl\LevelAkd\EloquentRepositoryLevelAkd;
use App\Repository\Impl\LevelAkd\LevelAkdRepository;
use App\Repository\Impl\MaterialSubject\EloquentMaterialSubjectRepository;
use App\Repository\Impl\MenuGenerator\EloquentRepositoryMenuGenerator;
use App\Repository\Impl\MaterialSubject\MaterialSubjectRepository;
use App\Repository\Impl\MenuGenerator\MenuGeneratorRepository;
use App\Repository\Impl\Province\EloquentRepositoryProvince;
use App\Repository\Impl\Province\ProvinceRepository;

use App\Repository\Impl\Question\EloquentRepositoryQuestion;
use App\Repository\Impl\Question\QuestionCategory\EloquentRepositoryQuestionCategory;
use App\Repository\Impl\Question\QuestionCategory\QuestionCategoryRepository;
use App\Repository\Impl\Question\QuestionRepository;
use App\Repository\Impl\Question\QuestionType\EloquentRepositoryQuestionType;
use App\Repository\Impl\Question\QuestionType\QuestionTypeRepository;
use App\Repository\Impl\Questionnaire\EloquentRepositoryQuestionnaire;
use App\Repository\Impl\Questionnaire\QuestionnaireRepository;

use App\Repository\Impl\Religion\EloquentRepositoryReligion;
use App\Repository\Impl\Religion\ReligionRepository;
use App\Repository\Impl\Room\EloquentRepositoryRoom;
use App\Repository\Impl\Room\RoomRepository;

use App\Repository\Impl\SecurityBranch\EloquentRepositorySecurityBranch;
use App\Repository\Impl\SecurityBranch\SecurityBranchRepository;
use App\Repository\Impl\SecurityFunction\EloquentRepositorySecurityFunction;
use App\Repository\Impl\SecurityFunction\SecurityFunctionRepository;
use App\Repository\Impl\SecurityFunctionAssignment\EloquentRepositorySecurityFunctionAssignment;
use App\Repository\Impl\SecurityFunctionAssignment\SecurityFunctionAssignmentRepository;
use App\Repository\Impl\SecurityGroup\EloquentRepositorySecurityGroup;
use App\Repository\Impl\SecurityGroup\EloquentRepositorySecurityUserProfile;
use App\Repository\Impl\SecurityGroup\SecurityGroupRepository;
use App\Repository\Impl\SecurityGroup\SecurityUserProfileRepository;
use App\Repository\Impl\SecurityUser\EloquentRepositoryUser;
use App\Repository\Impl\SecurityUser\UserRepository;

use App\Repository\Impl\Subject\SubjectCategory\EloquentSubjectCategoryRepository;
use App\Repository\Impl\Subject\SubjectCategory\SubjectCategoryRepository;
use App\Repository\Impl\Subject\SubjectType\EloquentRepositorySubjectType;
use App\Repository\Impl\Subject\SubjectType\SubjectTypeRepository;
use App\Repository\Impl\Village\EloquentRepositoryVillage;
use App\Repository\Impl\Village\VillageRepository;
use Illuminate\Support\ServiceProvider;

class TripoinRepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /*MDA*/
        $this->app->bind(CityRepository::class, EloquentRepositoryCity::class);
        $this->app->bind(DistrictRepository::class, EloquentRepositoryDistrict::class);
        $this->app->bind(VillageRepository::class, EloquentRepositoryVillage::class);
        $this->app->bind(QuestionTypeRepository::class, EloquentRepositoryQuestionType::class);
        $this->app->bind(QuestionCategoryRepository::class, EloquentRepositoryQuestionCategory::class);
        $this->app->bind(QuestionRepository::class, EloquentRepositoryQuestion::class);
        $this->app->bind(QuestionnaireRepository::class, EloquentRepositoryQuestionnaire::class);
        $this->app->bind(LevelAkdRepository::class, EloquentRepositoryLevelAkd::class);
        $this->app->bind(SubjectTypeRepository::class, EloquentRepositorySubjectType::class);
        $this->app->bind(SubjectCategoryRepository::class, EloquentSubjectCategoryRepository::class);
		$this->app->bind(ProvinceRepository::class, EloquentRepositoryProvince::class);
        $this->app->bind(BudgetTypeRepository::class, EloquentRepositoryBudgetType::class);
        $this->app->bind(CertificateRepository::class, EloquentRepositoryCertificate::class);
        $this->app->bind(RoomRepository::class, EloquentRepositoryRoom::class);
        $this->app->bind(AddressRepository::class, EloquentRepositoryAddress::class);
        $this->app->bind(AnswerCategoryRepository::class, EloquentRepositoryAnswerCategory::class);
        $this->app->bind(AnswerTypeRepository::class, EloquentRepositoryAnswerType::class);
        $this->app->bind(AssignmentLetterRepository::class, EloquentRepositoryAssignmentLetter::class);
        $this->app->bind(AttachmentRepository::class, EloquentRepositoryAttachment::class);
        $this->app->bind(CalcQuestionnaireRepository::class, EloquentRepositoryCalcQuestionnaire::class);
        $this->app->bind(ContactRepository::class, EloquentRepositoryContact::class);
        $this->app->bind(ContactMessageRepository::class, EloquentRepositoryContactMessage::class);
        $this->app->bind(EvaluationRepository::class, EloquentRepositoryEvaluation::class);
        $this->app->bind(EvaluationAssessRepository::class, EloquentRepositoryEvaluationAssess::class);
        $this->app->bind(EvaluationCategoryRepository::class, EloquentRepositoryEvaluationCategory::class);
        $this->app->bind(ReligionRepository::class, EloquentRepositoryReligion::class);
        $this->app->bind(FacilityRepository::class, EloquentFacilityRepository::class);

        /*SECURITY*/
        $this->app->bind(UserRepository::class, EloquentRepositoryUser::class);
        
		$this->app->bind(SecurityFunctionRepository::class, EloquentRepositorySecurityFunction::class);
        $this->app->bind(SecurityGroupRepository::class, EloquentRepositorySecurityGroup::class);
        $this->app->bind(SecurityFunctionAssignmentRepository::class, EloquentRepositorySecurityFunctionAssignment::class);
        $this->app->bind(SecurityBranchRepository::class, EloquentRepositorySecurityBranch::class);
        $this->app->bind(SecurityUserProfileRepository::class, EloquentRepositorySecurityUserProfile::class);
        $this->app->bind(MenuGeneratorRepository::class, EloquentRepositoryMenuGenerator::class);
        $this->app->bind(MaterialSubjectRepository::class, EloquentMaterialSubjectRepository::class);

        /*TRANSACTION*/

    }
}