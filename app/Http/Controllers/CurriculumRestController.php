<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:29 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelCurriculum;
use App\Repository\Impl\Curriculum\CurriculumRepository;

class CurriculumRestController extends ARestController
{
    /**
     * CurriculumRestController constructor.
     */
    public function __construct(CurriculumRepository $curriculumRepository)
    {
        $this->repository = $curriculumRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelCurriculum();
    }
}