<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 3:11 PM
 */

namespace App\Repository\Impl\QuestionSelected;


use App\Models\ModelQuestionSelected;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentQuestionSelectedRepository extends ABaseRepository implements QuestionSelectedRepository
{
    /**
     * EloquentQuestionSelectedRepository constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function getModel()
    {
       return new ModelQuestionSelected();
    }
}