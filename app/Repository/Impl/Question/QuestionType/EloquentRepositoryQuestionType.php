<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 18:19
 */

namespace App\Repository\Impl\Question\QuestionType;


use App\Models\ModelQuestionType;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryQuestionType extends ABaseRepository implements QuestionTypeRepository
{

    /**
     * EloquentQuestionTypeRepository constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelQuestionType();
    }
}