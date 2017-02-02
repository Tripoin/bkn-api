<?php

/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:18 PM
 */
namespace App\Repository\Impl\Unit;
use App\Models\ModelUnit;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentUnitRepository extends ABaseRepository implements UnitRepository
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
        return new ModelUnit();
    }
}