<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 18:23
 */

namespace App\Repository\Impl\Benefit\BenefitType;


use App\Models\ModelBenefitType;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryBenefitType extends ABaseRepository implements BenefitTypeRepository
{


    /**
     * EloquentRepositoryBenefitType constructor.
     */
    public function __construct(UserRepository $_userRepository)
    {
        parent::__construct($_userRepository);
    }

    public function  getModel()
    {
        return new ModelBenefitType();
    }
}