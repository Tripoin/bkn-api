<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 14:20
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelDistrict;
use App\Repository\Impl\District\DistrictRepository;

class DistrictRestController extends ARestController
{


    /**
     * DistrictRestController constructor.
     */
    public function __construct(DistrictRepository $districtRepository)
    {
        $this->repository = $districtRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelDistrict();
    }
}