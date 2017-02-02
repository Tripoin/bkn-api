<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 3:13 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelQuestionSelected;
use App\Repository\Impl\QuestionSelected\QuestionSelectedRepository;

class QuestionSelectedRestController extends ARestController
{
    /**
     * QuestionRestController constructor.
     */
    public function __construct(QuestionSelectedRepository $questionSelectedRepository)
    {
        $this->repository = $questionSelectedRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelQuestionSelected();
    }
}