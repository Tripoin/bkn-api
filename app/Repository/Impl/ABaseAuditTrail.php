<?php

/**
 * @project pip-api.
 * @since 9/4/2016 3:36 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl;

use App\ConstantValue\IApplicationConstant;
use App\Repository\Impl\SecurityUser\UserRepository;
use App\Repository\ITransactionRepository;
use App\Util\GeneralConverter;

abstract class ABaseAuditTrail implements ITransactionRepository
{

    protected $status;
    protected $created_on;
    protected $created_by;
    protected $modified_on;
    protected $modified_by;

    protected $activeUser;

    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        $this->userRepository = $p_UserRepository;
        $this->generalConverter = new GeneralConverter();
    }


    public function insert($p_DATA)
    {
        $p_DATA->status = IApplicationConstant::ACTIVE;
        $p_DATA->created_on = $this->getCurrentTimeStamp();
        $p_DATA->created_by = $this->getUserLoggedInID();
    }

    public function update($p_DATA)
    {
        $p_DATA->modified_on = $this->getCurrentTimeStamp();
        $p_DATA->modified_by = $this->getUserLoggedInID();
    }


    public function insertCollection($p_DATA)
    {
        foreach($p_DATA as $data){
            $this->insert($data);
        }
    }

    public function updateCollection($p_DATA)
    {
        foreach($p_DATA as $data){
            $this->update($data);
        }
    }

    public function getUserLoggedInID(){
        $userLoggedIn = $this->userRepository->getUserLoggedIn();
        return $userLoggedIn[IApplicationConstant::ID];
    }

    public function getCurrentTimeStamp(){
        return date(IApplicationConstant::TIMESTAMP_DATE_FORMAT);
    }
}