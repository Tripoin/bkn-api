<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 20:40
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelQuestion;
use App\Repository\Impl\Question\QuestionRepository;

class QuestionRestController extends ARestController
{

    /**
     * QuestionRestController constructor.
     */
    public function __construct(QuestionRepository $questionRepository)
    {
        $this->repository = $questionRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelQuestion();
    }
}