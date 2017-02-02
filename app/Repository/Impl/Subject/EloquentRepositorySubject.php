<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 2:04
 */

namespace App\Repository\Impl\Subject;


use App\Models\ModelSubject;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositorySubject extends ABaseRepository implements SubjectRepository
{

    /**
     * EloquentRepositorySubject constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelSubject();
    }
}