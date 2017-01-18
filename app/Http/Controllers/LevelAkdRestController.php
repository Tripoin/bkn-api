<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 21:12
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelLevelAkd;
use App\Repository\Impl\LevelAkd\LevelAkdRepository;

class LevelAkdRestController extends ARestController
{
    /**
     * LevelAkdRestController constructor.
     */
    public function __construct(LevelAkdRepository $levelAkdRepository)
    {
        $this->repository = $levelAkdRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelLevelAkd();
    }

    public function insert(){

    }
}