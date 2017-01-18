<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 18/01/2017
 * Time: 1:07
 */

namespace App\Repository\Impl\Subject\SubjectType;


use App\Models\ModelSubjectType;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositorySubjectType extends ABaseRepository implements SubjectTypeRepository
{
    /**
     * EloquentRepositorySubjectType constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelSubjectType();
    }
}