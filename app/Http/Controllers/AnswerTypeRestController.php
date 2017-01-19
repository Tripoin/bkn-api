<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelAnswerType;
use App\Repository\Impl\AnswerType\AnswerTypeRepository;

class AnswerTypeRestController extends ARestController
{

    public function __construct(AnswerTypeRepository $answerTypeRepository)
    {
        $this->repository = $answerTypeRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelAnswerType();
    }
}