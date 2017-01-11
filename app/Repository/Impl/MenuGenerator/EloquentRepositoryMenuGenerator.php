<?php

/**
 * @project pip-api.
 * @since 9/8/2016 10:24 AM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\MenuGenerator;

use App\ConstantValue\IApplicationConstant;
use App\Dto\Response\LoginResponseDTO;
use App\Repository\Impl\SecurityFunction\SecurityFunctionRepository;
use App\Repository\Impl\SecurityFunctionAssignment\SecurityFunctionAssignmentRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryMenuGenerator implements MenuGeneratorRepository
{

    public function __construct(
        UserRepository $p_UserRepository,
        SecurityFunctionAssignmentRepository $p_SecurityFunctionAssignmentRepository,
        SecurityFunctionRepository $p_SecurityFunctionRepository
    )
    {
        $this->userRepository = $p_UserRepository;
        $this->securityFARepository = $p_SecurityFunctionAssignmentRepository;
        $this->securityFRepository = $p_SecurityFunctionRepository;
    }


    public function generateMenu()
    {
        $response = array();
        $userLoggedIn = $this->userRepository->getUserLoggedIn();
        $loginResponse = new LoginResponseDTO();

        $loginResponse->setUserCode($userLoggedIn[IApplicationConstant::USER_CODE]);
        $loginResponse->setGroupId($userLoggedIn[IApplicationConstant::MODEL_SECURITY_USER_COL_GROUP_ID]);

        $sfa = $this->securityFARepository->selectFAFromGroup($loginResponse->getGroupId());
        //$assignedData = array();
        foreach ($sfa as $explodeData){
            $sf = $this->securityFRepository->findAllFromSFId(
                $explodeData[IApplicationConstant::MODEL_SECURITY_FUNCTION_ASSIGNMENT_FUNCTION_ID]
            );
            foreach($sf as $subExplodedData){
                $subMenu = $this->securityFRepository->selectParentIdFromId($subExplodedData[IApplicationConstant::ID]);
                $generatedSubMenu = null;
                foreach($subMenu as $subMenuCheck) {
                    /*$isAssigned = $this->securityFARepository->selectAssignmentFromFunctionId($subMenuCheck[IApplicationConstant::ID]);
                    foreach ($isAssigned as $assigned) {
                        if ($assigned->group_id != 1){
                            $assignedData[] = $subMenuCheck;
                        }
                    }*/
                    $generatedSubMenu[] = [
                        IApplicationConstant::CODE => $subMenuCheck->code,
                        IApplicationConstant::NAME => $subMenuCheck->name,
                        IApplicationConstant::LINK => $subMenuCheck->url,
                        IApplicationConstant::STYLE => $subMenuCheck->style,
                        IApplicationConstant::ORDER => $subMenuCheck->order,
                        IApplicationConstant::LEVEL => $subMenuCheck->level,
                        IApplicationConstant::PARENT => $subMenuCheck->parent_id,
                        IApplicationConstant::SUB_MENU => null
                    ];
                }
                $response[] = [
                    IApplicationConstant::CODE => $subExplodedData->code,
                    IApplicationConstant::NAME => $subExplodedData->name,
                    IApplicationConstant::LINK => $subExplodedData->url,
                    IApplicationConstant::STYLE => $subExplodedData->style,
                    IApplicationConstant::ORDER => $subExplodedData->order,
                    IApplicationConstant::LEVEL => $subExplodedData->level,
                    IApplicationConstant::PARENT => $subExplodedData->parent_id,
                    IApplicationConstant::SUB_MENU => $generatedSubMenu
                ];
                //$assignedData = array();
            }
        }
        //$loginResponse->setItem($response);
        return $response;
    }

}