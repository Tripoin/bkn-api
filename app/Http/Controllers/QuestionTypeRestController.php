<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 18:31
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelQuestionType;
use App\Repository\Impl\Question\QuestionType\QuestionTypeRepository;

class QuestionTypeRestController extends ARestController
{
    /**
     * QuestionTypeRestController constructor.
     */
    public function __construct(QuestionTypeRepository $questionTypeRepository)
    {
        $this->repository = $questionTypeRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelQuestionType();
    }
}