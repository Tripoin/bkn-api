<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelAssignmentLetter;
use App\Repository\Impl\AssignmentLetterRepository;

class AssignmentLetterRestController extends ARestController
{

    /**
     * @param AssignmentLetterRepository $assignmentLetterRepository
     */
    public function __construct(AssignmentLetterRepository $assignmentLetterRepository)
    {
        $this->repository = $assignmentLetterRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelAssignmentLetter();
    }
}