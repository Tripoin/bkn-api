<?php

/**
 * @project pip-api.
 * @since 9/7/2016 5:54 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSecurityBranch;
use App\Repository\Impl\SecurityBranch\SecurityBranchRepository;

class SecurityBranchRestController extends ARestController
{

    /**
     * @param SecurityBranchRepository $p_SecurityBranchRepository
     */
    public function __construct(SecurityBranchRepository $p_SecurityBranchRepository)
    {
        $this->repository = $p_SecurityBranchRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSecurityBranch();
    }
}