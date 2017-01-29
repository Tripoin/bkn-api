<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 1:19
 */

namespace App\Repository\Impl\Subject\SubjectCategory;


use App\Models\ModelSubjectCategory;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositorySubjectCategory extends ABaseRepository implements SubjectCategoryRepository
{

    /**
     * EloquentRepositorySubjectCategory constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelSubjectCategory();
    }
}