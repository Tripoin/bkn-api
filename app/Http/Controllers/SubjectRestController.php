<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 2:21
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSubject;
use App\Repository\Impl\Subject\SubjectRepository;

class SubjectRestController extends ARestController
{
    /**
     * SubjectRestController constructor.
     */
    public function __construct(SubjectRepository $subjectRepository)
    {
        $this->repository = $subjectRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSubject();
    }
}