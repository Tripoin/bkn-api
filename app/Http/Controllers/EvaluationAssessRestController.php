<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelEvaluationAssess;
use App\Repository\Impl\EvaluationAssess\EvaluationAssessRepository;

class EvaluationAssessRestController extends ARestController
{

    /**
     * @param EvaluationAssessRepository $evaluationAssessRepository
     */
    public function __construct(EvaluationAssessRepository $evaluationAssessRepository)
    {
        $this->repository = $evaluationAssessRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelEvaluationAssess();
    }
}