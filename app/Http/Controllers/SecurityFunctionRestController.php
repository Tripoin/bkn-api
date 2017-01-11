<?php

/**
 * @project pip-api.
 * @since 9/7/2016 5:55 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSecurityFunction;
use App\Repository\Impl\SecurityFunction\SecurityFunctionRepository;

class SecurityFunctionRestController extends ARestController
{

    public function __construct(SecurityFunctionRepository $p_SecurityFunctionRepository)
    {
        $this->repository = $p_SecurityFunctionRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSecurityFunction();
    }
}