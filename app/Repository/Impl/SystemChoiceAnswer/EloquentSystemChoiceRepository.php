<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:43 PM
 */

namespace App\Repository\Impl\SystemChoiceAnswer;


use App\Models\ModelSystemChoiceAnswer;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;
use App\Repository\Impl\Unit\UnitRepository;

class EloquentSystemChoiceRepository extends ABaseRepository implements SystemChoiceAnswerRepository
{

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelSystemChoiceAnswer();
    }
}