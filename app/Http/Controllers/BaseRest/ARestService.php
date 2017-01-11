<?php

/**
 * @project pip-api.
 * @since 9/16/2016 3:27 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\BaseRest;


use App\Dto\Entity\DTOPaging;
use App\Util\ClassCaster;
use App\Util\RestUtil;

abstract class ARestService
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