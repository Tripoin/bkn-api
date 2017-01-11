<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 15:58
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelEducation;
use App\Repository\Impl\Education\EducationRepository;

class EducationRestController extends ARestController
{


    /**
     * EducationRestController constructor.
     */
    public function __construct(EducationRepository $_educationRepository)
    {
        $this->repository = $_educationRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelEducation();
    }
}