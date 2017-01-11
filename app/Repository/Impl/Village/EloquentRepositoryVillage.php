<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 15:03
 */

namespace App\Repository\Impl\Village;


use App\Models\ModelVillage;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryVillage extends ABaseRepository implements VillageRepository
{


    /**
     * EloquentRepositoryVillage constructor.
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelVillage();
    }
}