<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 16:22
 */

namespace App\Repository\Impl\Questionnaire;


use App\ConstantValue\IApplicationConstant;
use App\Models\ModelQuestionnaire;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryQuestionnaire extends ABaseRepository implements QuestionnaireRepository
{

    /**
     * EloquentRepositoryQuestionnaire constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelQuestionnaire();
    }

    public function lovQuestionCategory($p_QuestionCategoryID){
        $dataLov = $this->getModel()
            ->select(IApplicationConstant::ID, IApplicationConstant::NAME)
            ->where(
                [
                    [IApplicationConstant::QUESTION_CATEGORY_ID, IApplicationConstant::EQUALS, $p_QuestionCategoryID],
                    $this->getRecordActiveStatement()
                ]
            )->get();

        foreach($dataLov as $data){
            $result[] = [ IApplicationConstant::ID=>$data->id, IApplicationConstant::LABEL=>$data->name ];
        }
        return $result;
    }

    public function lovLevelAkd($p_LevelAkd){

    }
}