<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 5:31 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelStudyProgram;
use App\Repository\Impl\StudyProgram\StudyProgramRepository;

class StudyProgramRestController extends ARestController
{
    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(StudyProgramRepository $studyProgramRepository)
    {
        $this->repository = $studyProgramRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelStudyProgram();
    }
}