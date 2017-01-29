<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:05 AM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelFacility;
use App\Repository\Impl\Facility\FacilityRepository;

class FacilityRestController extends ARestController
{
    public function __construct(FacilityRepository $facilityRepository)
    {
        $this->repository = $facilityRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelFacility();
    }
}