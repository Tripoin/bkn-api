<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 0:38
 */

namespace App\Repository\Impl\Subject\SubjectRequirements;


use App\Models\ModelSubjectRequirements;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositorySubjectRequirements extends ABaseRepository implements SubjectRequirementsRepository
{
    /**
     * EloquentRepositorySubjectRequirements constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelSubjectRequirements();
    }
}