<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 6:02 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\SecurityFunction;

use App\ConstantValue\IApplicationConstant;
use App\Models\ModelSecurityFunction;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositorySecurityFunction extends ABaseRepository implements SecurityFunctionRepository
{

    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelSecurityFunction();
    }

    public function findAllFromSFId($p_ID)
    {
        return $this->getModel()->where(
            [
                [
                    IApplicationConstant::ID,
                    IApplicationConstant::EQUALS,
                    $p_ID
                ],
                [
                    IApplicationConstant::MODEL_SECURITY_FUNCTION_PARENT_ID,
                    IApplicationConstant::EQUALS,
                    IApplicationConstant::NOT_ACTIVE
                ],
                [
                    IApplicationConstant::STATUS,
                    IApplicationConstant::EQUALS,
                    IApplicationConstant::ACTIVE
                ]
            ]
        )->get();
    }

    public function selectParentIdFromId($p_ID)
    {
        return $this->getModel()->where(
            [
                [
                    IApplicationConstant::MODEL_SECURITY_FUNCTION_PARENT_ID,
                    IApplicationConstant::EQUALS,
                    $p_ID
                ],
                [
                    IApplicationConstant::STATUS,
                    IApplicationConstant::EQUALS,
                    IApplicationConstant::ACTIVE
                ]
            ]
        )->get();
    }
}