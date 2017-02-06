<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelAnswerType;
use App\Repository\Impl\AnswerCategory\AnswerCategoryRepository;
use App\Repository\Impl\AnswerType\AnswerTypeRepository;

class AnswerTypeRestController extends ARestController
{
    private $answerCategoryRepo;

    public function __construct(AnswerTypeRepository $answerTypeRepository, AnswerCategoryRepository $categoryRepository)
    {
        $this->repository = $answerTypeRepository;
        $this->answerCategoryRepo = $categoryRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelAnswerType();
    }

    public function getDataAnswerCategory(){
        $result = $this->advancedPagination();
        $content = json_encode($result);
        $data = json_decode($content)->data;
        $content = json_decode($content);
        foreach($data as $item){
            $item->answer_category_id = $this->answerCategoryRepo->findById($item->answer_category_id);
        }
        $content->data = $data;
        return response()->json($content);
    }
}