<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 06/09/2016
 * Time: 18:16
 */

namespace App\Repository\Impl\District;


use App\Models\ModelDistrict;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryDistrict extends ABaseRepository implements DistrictRepository
{


    /**
     * EloquentRepositoryDistrict constructor.
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelDistrict();
    }
}