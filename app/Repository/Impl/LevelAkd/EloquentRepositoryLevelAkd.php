<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 20:58
 */

namespace App\Repository\Impl\LevelAkd;


use App\Models\ModelLevelAkd;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryLevelAkd extends ABaseRepository implements LevelAkdRepository
{

    /**
     * EloquentRepositoryLevelAkd constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelLevelAkd();
    }
}