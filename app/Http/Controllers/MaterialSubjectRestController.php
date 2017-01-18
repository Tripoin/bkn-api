<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/19/17
 * Time: 1:18 AM
 */
namespace app\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelMaterialSubject;
use App\Repository\Impl\MaterialSubject\MaterialSubjectRepository;

class MaterialSubjectRestController  extends ARestController
{




    /**
     * BudgetTypeRestController constructor.
     */
    public function __construct(MaterialSubjectRepository $materialSubjectRepository)
    {
        $this->repository = $materialSubjectRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelMaterialSubject();
    }

}