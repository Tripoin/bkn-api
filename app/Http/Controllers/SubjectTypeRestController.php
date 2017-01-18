<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 18/01/2017
 * Time: 1:18
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSubjectType;
use App\Repository\Impl\Subject\SubjectType\SubjectTypeRepository;

class SubjectTypeRestController extends ARestController
{
    /**
     * SubjectTypeRestController constructor.
     */
    public function __construct(SubjectTypeRepository $subjectTypeRepository)
    {
        $this->repository = $subjectTypeRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSubjectType();
    }
}