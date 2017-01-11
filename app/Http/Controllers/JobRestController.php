<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 15:47
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelJob;
use App\Repository\Impl\Job\JobRepository;

class JobRestController extends ARestController
{


    /**
     * JobRestController constructor.
     */
    public function __construct(JobRepository $_jobRepository)
    {
        $this->repository = $_jobRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelJob();
    }
}