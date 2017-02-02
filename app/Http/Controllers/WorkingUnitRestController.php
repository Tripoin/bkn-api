<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:39 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelWorkingUnit;
use App\Repository\Impl\WorkingUnit\WorkingUnitRepository;

class WorkingUnitRestController extends ARestController
{
    /**
     * SystemChoiceAnswerRestController constructor.
     */
    public function __construct(WorkingUnitRepository $workingUnitRepository)
    {
        $this->repository = $workingUnitRepository;
        parent::__construct();
    }

    public function getModel()
    {
        new ModelWorkingUnit();
    }
}