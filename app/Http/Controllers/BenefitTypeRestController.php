<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 18:27
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelBenefitType;
use App\Repository\Impl\Benefit\BenefitType\BenefitTypeRepository;

class BenefitTypeRestController extends ARestController
{


    /**
     * BenefitTypeRestController constructor.
     */
    public function __construct(BenefitTypeRepository $_benefitTypeRepository)
    {
        $this->repository = $_benefitTypeRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelBenefitType();
    }
}