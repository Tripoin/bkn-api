<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:05 PM
 */

namespace App\Repository\Impl\WorkingUnit;


use App\Models\ModelWorkingUnit;
use App\Repository\Impl\ABaseRepository;

class EloquentWorkingUnitRepository extends ABaseRepository implements WorkingUnitRepository
{

    /**
     * EloquentWorkingUnitRepository constructor.
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelWorkingUnit();
    }
}