<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelAnswerCategory;
use App\Repository\Impl\AnswerCategory\AnswerCategoryRepository;

class AnswerCategoryRestController extends ARestController
{

    /**
     * @param AnswerCategoryRepository $answerCategoryRepository
     */
    public function __construct(AnswerCategoryRepository $answerCategoryRepository)
    {
        $this->repository = $answerCategoryRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelAnswerCategory();
    }
}