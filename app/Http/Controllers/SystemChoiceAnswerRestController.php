<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:58 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSystemChoiceAnswer;
use App\Repository\Impl\SystemChoiceAnswer\SystemChoiceAnswerRepository;

class SystemChoiceAnswerRestController extends ARestController
{
    /**
     * SystemChoiceAnswerRestController constructor.
     */
    public function __construct(SystemChoiceAnswerRepository $systemChoiceAnswerRepository)
    {
        $this->repository = $systemChoiceAnswerRepository;
        parent::__construct();
    }

    public function getModel()
    {
       new ModelSystemChoiceAnswer();
    }
}