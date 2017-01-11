<?php

/**
 * @project pip-api.
 * @since 9/5/2016 5:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelBenefit;
use App\Repository\Impl\Benefit\BenefitRepository;

class BenefitRestController extends ARestController
{

    /**
     * @param BenefitRepository $p_EloquentRepositoryBenefit
     */
    public function __construct(BenefitRepository $p_EloquentRepositoryBenefit)
    {
        $this->repository = $p_EloquentRepositoryBenefit;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelBenefit();
    }
}