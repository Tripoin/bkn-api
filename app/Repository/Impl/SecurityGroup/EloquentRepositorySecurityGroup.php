<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 6:02 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\SecurityGroup;

use App\Models\ModelSecurityGroup;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositorySecurityGroup extends ABaseRepository implements SecurityGroupRepository
{

    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function getModel()
    {
        return new ModelSecurityGroup();
    }
}