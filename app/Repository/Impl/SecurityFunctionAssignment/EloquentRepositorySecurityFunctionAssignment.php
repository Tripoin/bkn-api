<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 6:02 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\SecurityFunctionAssignment;

use App\ConstantValue\IApplicationConstant;
use App\Models\ModelSecurityFunctionAssignment;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositorySecurityFunctionAssignment extends ABaseRepository implements SecurityFunctionAssignmentRepository
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
        return new ModelSecurityFunctionAssignment();
    }

    public function selectFAFromGroup($p_Group){
        return $this->getModel()->where(
            [
                [
                    IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_GROUP_ID,
                    IApplicationConstant::EQUALS,
                    $p_Group
                ],
                [
                    IApplicationConstant::STATUS,
                    IApplicationConstant::EQUALS,
                    IApplicationConstant::ACTIVE
                ]
            ]
        )->orderBy(IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_ASSIGNMENT_ORDER, IApplicationConstant::ASC)
            ->get();
    }

    public function selectAssignmentFromFunctionId($p_ID)
    {
        return $this->getModel()->where(
            [
                [
                    IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_FUNCTION_ID,
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