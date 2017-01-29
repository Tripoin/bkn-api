<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 1:21
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSubjectCategory;
use App\Repository\Impl\Subject\SubjectCategory\SubjectCategoryRepository;

class SubjectCategoryRestController extends ARestController
{

    /**
     * SubjectCategoryRestController constructor.
     */
    public function __construct(SubjectCategoryRepository $subjectCategoryRepository)
    {
        $this->repository = $subjectCategoryRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSubjectCategory();
    }
}