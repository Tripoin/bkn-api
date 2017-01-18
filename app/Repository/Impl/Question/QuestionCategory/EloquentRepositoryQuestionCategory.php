<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 18:27
 */

namespace App\Repository\Impl\Question\QuestionCategory;


use App\Models\ModelQuestionCategory;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryQuestionCategory extends ABaseRepository implements QuestionCategoryRepository
{
    /**
     * EloquentQuestionCategoryRepository constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelQuestionCategory();
    }
}