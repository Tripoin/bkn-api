<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelChecklistUsage;
use App\Repository\Impl\ChecklistUsage\ChecklistUsageRepository;

class ChecklistUsageRestController extends ARestController
{

    /**
     * @param ChecklistUsageRepository $checklistUsageRepository
     */
    public function __construct(ChecklistUsageRepository $checklistUsageRepository)
    {
        $this->repository = $checklistUsageRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelChecklistUsage();
    }
}