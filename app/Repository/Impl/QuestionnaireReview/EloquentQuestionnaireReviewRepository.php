<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:20 PM
 */

namespace App\Repository\Impl\QuestionnaireReview;


use App\Models\ModelQuestionnaireReview;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentQuestionnaireReviewRepository extends ABaseRepository implements QuestionnaireReviewRepository
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
        return new ModelQuestionnaireReview();
    }
}