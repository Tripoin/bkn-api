<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelEvaluation;
use App\Repository\Impl\Evaluation\EvaluationRepository;

class EvaluationRestController extends ARestController
{

    /**
     * @param EvaluationRepository $evaluationRepository
     */
    public function __construct(EvaluationRepository $evaluationRepository)
    {
        $this->repository = $evaluationRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelEvaluation();
    }
}