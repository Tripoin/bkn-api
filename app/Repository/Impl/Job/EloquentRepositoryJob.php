<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 15:44
 */

namespace App\Repository\Impl\Job;


use App\Models\ModelJob;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryJob extends ABaseRepository implements JobRepository
{


    /**
     * EloquentRepositoryJob constructor.
     */
    public function __construct(UserRepository $_userRepository)
    {
        parent::__construct($_userRepository);
    }

    public function  getModel()
    {
        return new ModelJob();
    }
}