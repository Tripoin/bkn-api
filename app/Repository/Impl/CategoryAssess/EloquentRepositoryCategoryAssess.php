<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 25/01/2017
 * Time: 19:46
 */

namespace App\Repository\Impl\CategoryAssess;


use App\Models\ModelCategoryAssess;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryCategoryAssess extends ABaseRepository implements CategoryAssessRepository
{

    /**
     * EloquentRepositoryCategoryAssess constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelCategoryAssess();
    }
}