<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:32 PM
 */

namespace App\Http\Controllers;


use App\Repository\Impl\QuestionnaireReview\QuestionnaireReviewRepository;

class QuestionnaireReviewRestController
{
    /**
     * QuestionnaireReviewRestController constructor.
     */
    public function __construct(QuestionnaireReviewRepository $questionnaireReviewRepository)
    {
        $this->repository = $questionnaireReviewRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelQuestionnaire();
    }
}