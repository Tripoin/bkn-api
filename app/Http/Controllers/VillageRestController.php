<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 15:06
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelVillage;
use App\Repository\Impl\Village\VillageRepository;

class VillageRestController extends ARestController
{


    /**
     * VillageRestController constructor.
     */
    public function __construct(VillageRepository $_villageRepository)
    {
        $this->repository = $_villageRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelVillage();
    }
}