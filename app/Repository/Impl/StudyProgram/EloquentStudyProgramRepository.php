<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 5:26 PM
 */

namespace App\Repository\Impl\StudyProgram;


use App\Models\ModelStudyProgram;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentStudyProgramRepository extends ABaseRepository implements StudyProgramRepository
{
    /**
     * @param $p_UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }
    public function getModel()
    {
        return new ModelStudyProgram();
    }
}