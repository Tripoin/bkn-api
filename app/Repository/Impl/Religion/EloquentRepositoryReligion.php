<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/24/17
 * Time: 11:53 PM
 */

namespace App\Repository\Impl\Religion;


use App\Models\ModelReligion;
use App\Repository\Impl\ABaseRepository;

class EloquentRepositoryReligion extends ABaseRepository implements ReligionRepository
{
    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function getModel()
    {
        return new ModelReligion();
    }
}