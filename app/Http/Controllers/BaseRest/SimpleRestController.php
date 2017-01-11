<?php

/**
 * @project pip-api.
 * @since 9/16/2016 2:54 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\BaseRest;


use App\Dto\Entity\DTOPaging;
use App\Http\Controllers\Controller;
use App\Util\ClassCaster;
use App\Util\RestUtil;

class SimpleRestController extends Controller
{

    protected $restUtil;
    protected $dtoPaging;
    protected $classCaster;


    /**
     * SimpleRestController constructor.
     */
    public function __construct()
    {
        $this->restUtil = new RestUtil();
        $this->classCaster = new ClassCaster();
        $this->dtoPaging = new DTOPaging();
    }

}