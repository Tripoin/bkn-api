<?php

/**
 * @project pip-api.
 * @since 9/7/2016 5:57 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSecurityFunctionAssignment;
use App\Repository\Impl\SecurityFunctionAssignment\SecurityFunctionAssignmentRepository;

class SecurityFunctionAssignmentRestController extends ARestController
{

    /**
     * @param SecurityFunctionAssignmentRepository $p_SecurityFunctionAssignmentRepository
     */
    public function __construct(SecurityFunctionAssignmentRepository $p_SecurityFunctionAssignmentRepository)
    {
        $this->repository = $p_SecurityFunctionAssignmentRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSecurityFunctionAssignment();
    }
}