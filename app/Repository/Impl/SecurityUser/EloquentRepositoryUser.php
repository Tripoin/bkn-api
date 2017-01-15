<?php

/**
 * @project pip-api.
 * @since 9/1/2016 11:47 AM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\SecurityUser;

use App\ConstantValue\IApplicationConstant;
use App\Models\ModelSecurityUser;
use App\Repository\Impl\ABaseRepository;
use Illuminate\Support\Facades\Log;
use Mockery\CountValidator\Exception;

class EloquentRepositoryUser extends ABaseRepository implements UserRepository
{

    public function __construct()
    {
        $this->recordActiveStatement = [
            IApplicationConstant::STATUS,
            IApplicationConstant::EQUALS,
            IApplicationConstant::ACTIVE
        ];
    }

    public function getUserLoggedIn(){
        return ModelSecurityUser::where
        (
            [
                [
                    IApplicationConstant::MODEL_SECURITY_USER_COL_USER_LOGIN_STATUS,
                    IApplicationConstant::EQUALS,
                    IApplicationConstant::ACTIVE
                ],
                [
                    IApplicationConstant::STATUS,
                    IApplicationConstant::EQUALS,
                    IApplicationConstant::ACTIVE
                ],
            ]
        )
        ->first();
    }

    public function doLogin($p_UserCode)
    {
        ModelSecurityUser::where(
            IApplicationConstant::MODEL_SECURITY_USER_COL_USER_CODE,
            IApplicationConstant::LIKE,
            IApplicationConstant::PERCENTAGE . $p_UserCode . IApplicationConstant::PERCENTAGE
        )->update([IApplicationConstant::MODEL_SECURITY_USER_COL_USER_LOGIN_STATUS => IApplicationConstant::ACTIVE]);
    }

    public function doLogout($p_UserCode)
    {
        ModelSecurityUser::where(
            IApplicationConstant::MODEL_SECURITY_USER_COL_USER_CODE,
            IApplicationConstant::LIKE,
            IApplicationConstant::PERCENTAGE . $p_UserCode . IApplicationConstant::PERCENTAGE
        )->update([IApplicationConstant::MODEL_SECURITY_USER_COL_USER_LOGIN_STATUS => IApplicationConstant::NOT_ACTIVE]);
    }

    public function  getModel()
    {
        return new ModelSecurityUser();
    }

    public function insert($p_DATA)
    {
        try{
            $p_DATA->status = IApplicationConstant::ACTIVE;
            $p_DATA->created_on = $this->getCurrentTimeStamp();
            $p_DATA->created_by = $this->getLoggedInID();
            $p_DATA->save();
        }catch (Exception $e){
            Log::error('Eloquent Repo  User -> insert : '.$e->getMessage());
        }

    }

    public function update($p_DATA)
    {
        $p_DATA->modified_on = $this->getCurrentTimeStamp();
        $p_DATA->modified_by = $this->getLoggedInID();
        $this->getModel()->where(IApplicationConstant::ID, $p_DATA->id)
            ->update($p_DATA->toArray());
    }

    public function delete($p_ID)
    {
        $p_DATA = $this->findById($p_ID);
        $p_DATA->delete();
    }

    public function insertCollection($p_DATA)
    {
        // TODO: Implement insertCollection() method.
    }

    public function updateCollection($p_DATA)
    {
        // TODO: Implement updateCollection() method.
    }

    public function deleteCollection($p_IDs)
    {
        // TODO: Implement deleteCollection() method.
    }

    public function getLoggedInID(){
        $userLoggedIn = $this->getUserLoggedIn();
        return $userLoggedIn[IApplicationConstant::ID];
    }

    public function getCurrentTimeStamp(){
        return date(IApplicationConstant::TIMESTAMP_DATE_FORMAT);
    }
}