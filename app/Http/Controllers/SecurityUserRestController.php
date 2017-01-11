<?php

/**
 * @project pip-api.
 * @since 9/7/2016 6:13 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;

use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSecurityUser;
use App\Repository\Impl\SecurityUser\UserRepository;

class SecurityUserRestController extends ARestController
{
    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        $this->repository = $p_UserRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSecurityUser();
    }
}