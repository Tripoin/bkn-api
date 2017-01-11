<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 07/09/2016
 * Time: 15:55
 */

namespace App\Repository\Impl\Education;


use App\Models\ModelEducation;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryEducation extends ABaseRepository implements EducationRepository
{


    /**
     * EloquentRepositoryEducation constructor.
     */
    public function __construct(UserRepository $_userRepository)
    {
        parent::__construct($_userRepository);
    }

    public function  getModel()
    {
        return new ModelEducation();
    }
}