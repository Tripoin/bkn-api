<?php

/**
 * @project pip-rest.
 * @since 8/18/2016 5:13 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;

use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelProvince;
use App\Repository\Impl\Province\ProvinceRepository;


class ProvinceRestController extends ARestController {

    /**
     * @param ProvinceRepository $provinceRepository
     */
    public function __construct(ProvinceRepository $provinceRepository) {
        $this->repository = $provinceRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelProvince();
    }
}
