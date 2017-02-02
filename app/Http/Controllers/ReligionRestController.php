<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/25/17
 * Time: 12:02 AM
 */

namespace App\Http\Controllers\Transaction;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelReligion;
use App\Repository\Impl\Religion\ReligionRepository;

class ReligionRestController extends ARestController
{

    public function __construct(ReligionRepository $religionRepository)
    {
        $this->repository = $religionRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelReligion();
    }
}