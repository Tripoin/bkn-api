<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 18/01/2017
 * Time: 0:31
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelQuestionnaire;
use App\Repository\Impl\Questionnaire\QuestionnaireRepository;

class QuestionnaireRestController extends ARestController
{

    /**
     * QuestionnaireRestController constructor.
     */
    public function __construct(QuestionnaireRepository $questionnaireRepository)
    {
        $this->repository = $questionnaireRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelQuestionnaire();
    }
}