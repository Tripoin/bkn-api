<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 19:38
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelQuestionCategory;
use App\Repository\Impl\Question\QuestionCategory\QuestionCategoryRepository;

class QuestionCategoryRestController extends ARestController
{

    /**
     * QuestionCategoryRestController constructor.
     */
    public function __construct(QuestionCategoryRepository $questionCategoryRepository)
    {
        $this->repository = $questionCategoryRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelQuestionCategory();
    }
}