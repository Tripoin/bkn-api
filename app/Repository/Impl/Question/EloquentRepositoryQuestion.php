<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 20:12
 */

namespace App\Repository\Impl\Question;


use App\Models\ModelQuestion;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryQuestion extends ABaseRepository implements QuestionRepository
{
    /**
     * EloquentRepositoryQuestion constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelQuestion();
    }
}