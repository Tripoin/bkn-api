<?php

/**
 * @project pip-api.
 * @since 9/5/2016 4:14 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\Benefit;


use App\Models\ModelBenefit;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryBenefit extends ABaseRepository implements BenefitRepository
{

    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelBenefit();
    }
}