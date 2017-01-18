<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/19/17
 * Time: 2:03 AM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSubjectCategory;
use App\Repository\Impl\Subject\SubjectCategory\SubjectCategoryRepository;

class SubjectCategoryRestController extends  ARestController
{
    /**
     * SubjectTypeRestController constructor.
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