<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 25/01/2017
 * Time: 19:50
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelCategoryAssess;
use App\Repository\Impl\CategoryAssess\CategoryAssessRepository;

class CategoryAssessRestController extends ARestController
{

    /**
     * CategoryAssessRestController constructor.
     */
    public function __construct(CategoryAssessRepository $categoryAssessRepository)
    {
        $this->repository = $categoryAssessRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelCategoryAssess();
    }

    public function getCategoryWithParent(){
        $result = $this->advancedPagination();
        $content = json_encode($result);
        $data = json_decode($content)->data;
        $content = json_decode($content);
        foreach($data as $item){
            $item->parent_id = $this->repository->findById($item->parent_id);
        }
        $content->data = $data;
        return response()->json($content);
    }
}