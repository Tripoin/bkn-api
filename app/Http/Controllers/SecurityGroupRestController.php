<?php

/**
 * @project pip-api.
 * @since 9/7/2016 5:58 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSecurityGroup;
use App\Repository\Impl\SecurityGroup\SecurityGroupRepository;

class SecurityGroupRestController extends ARestController
{

    /**
     * @param SecurityGroupRepository $p_SecurityGroupRepository
     */
    public function __construct(SecurityGroupRepository $p_SecurityGroupRepository)
    {
        $this->repository = $p_SecurityGroupRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSecurityGroup();
    }
}