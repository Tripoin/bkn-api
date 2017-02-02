<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 25/01/2017
 * Time: 20:04
 */

namespace App\Repository\Impl\College;


use App\Models\ModelCollege;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryCollege extends ABaseRepository implements CollegeRepository
{

    /**
     * EloquentRepositoryCollege constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelCollege();
    }
}