<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 21:12
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelLevelQuestionnaire;
use App\Repository\Impl\LevelQuestionnaire\LevelQuestionnaireRepository;

class LevelQuestionnaireRestController extends ARestController
{
    /**
     * LevelAkdRestController constructor.
     */
    public function __construct(LevelQuestionnaireRepository $levelAkdRepository)
    {
        $this->repository = $levelAkdRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelLevelQuestionnaire();
    }

}