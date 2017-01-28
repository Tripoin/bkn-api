<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:03 AM
 */

namespace App\Repository\Impl\Facility;


use App\Models\ModelFacility;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentFacilityRepository extends ABaseRepository implements FacilityRepository
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
        return new ModelFacility();
    }
}