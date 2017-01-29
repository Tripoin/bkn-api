<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:21 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelUnit;
use App\Repository\Impl\Unit\UnitRepository;

class UnitRestController extends ARestController
{

    /**
     * UnitRestController constructor.
     */
    public function __construct(UnitRepository $unitRepository)
    {
        $this->repository = $unitRepository;
        parent::__construct();
    }

    public function getModel()
    {
        new ModelUnit();
    }
}