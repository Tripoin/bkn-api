<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\AnswerCategory;

use App\Models\ModelEvaluationAssess;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\EvaluationAssess\EvaluationAssessRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryEvaluationAssess extends ABaseRepository implements EvaluationAssessRepository
{

    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelEvaluationAssess();
    }




}