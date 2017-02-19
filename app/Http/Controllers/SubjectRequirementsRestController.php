<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 0:40
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSubjectRequirements;
use App\Repository\Impl\Subject\SubjectRequirements\SubjectRequirementsRepository;

class SubjectRequirementsRestController extends ARestController
{
    /**
     * SubjectRequeirementsRestController constructor.
     */
    public function __construct(SubjectRequirementsRepository $requirementsRepository)
    {
        $this->repository = $requirementsRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSubjectRequirements();
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