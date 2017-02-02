<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 25/01/2017
 * Time: 20:16
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelCollege;
use App\Repository\Impl\College\CollegeRepository;

class CollegeRestController extends ARestController
{

    /**
     * CollegeRestController constructor.
     */
    public function __construct(CollegeRepository $collegeRepository)
    {
        $this->repository = $collegeRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelCollege();
    }
}