<?php
namespace App\Repository\Impl\Subject\SubjectCategory;


/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/19/17
 * Time: 1:54 AM
 */
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;
use App\Models\ModelSubjectCategory;
class EloquentSubjectCategoryRepository  extends ABaseRepository implements SubjectCategoryRepository
{
    /**
     * EloquentSubjectCategory constructor.
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