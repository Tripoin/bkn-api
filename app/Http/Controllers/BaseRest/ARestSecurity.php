<?php

/**
 * @package app\Http\Controllers\BaseRest
 * @since 1/25/2016 - 7:14 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\BaseRest;

use App\ConstantValue\IApplicationConstant;
use App\Dto\Response\LoginResponseDTO;
use App\Model\ModelSecurityFunction;
use App\Model\ModelSecurityFunctionAssignment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


abstract class ARestSecurity extends ARestController implements IRestSecurity
{

    function executeLogin($p_UserData)
    {
        if($p_UserData != null){
            Auth::login(Auth::user());
            $p_UserData->user_login_status = 1;
            if($p_UserData->user_first_login == null){
                $p_UserData->user_first_login = Carbon::now();
            }else{
                $p_UserData->user_last_login = Carbon::now();
            }
            $p_UserData->save();
            return response()->json($this->generateMenuResponse($p_UserData));
            //return response()->json($this->generateBaseSuccessResponse("Success Login"));
        }else{
            $p_UserData->user_failed_login = Carbon::now();
            $p_UserData->save();
            return response()->json($this->generateBaseFailedResponse());
        }
    }

    function executeLogout($p_UserData)
    {
        if($p_UserData != null){
            Auth::login(Auth::user());
            $p_UserData->user_login_status = 0;
            $p_UserData->save();
            return response()->json($this->generateBaseSuccessResponse("Success Logout"));
        }else{
            $p_UserData->save();
            return response()->json($this->generateBaseFailedResponse());
        }
    }

    function generateMenuResponse($p_Data)
    {
        //print_r($p_Data);
        $loginResponse = new LoginResponseDTO();
        $loginResponse->setUserCode($p_Data[IApplicationConstant::USER_CODE]);
        $loginResponse->setGroupId($p_Data[IApplicationConstant::GROUP_ID]);
        $baseResponse = $this->generateBaseSuccessResponse(IApplicationConstant::SECURITY_USER_MODEL_NAME);
        $loginResponse->setStatusCode($baseResponse->getStatusCode());
        $loginResponse->setMessage($baseResponse->getMessage());
        $loginResponse->setDescription($baseResponse->getDescription());

        $sfa = ModelSecurityFunctionAssignment::where(IApplicationConstant::GROUP_ID, IApplicationConstant::EQUALS, $loginResponse->getGroupId())->get();
        foreach ($sfa as $explodeData){
            $sf = ModelSecurityFunction::where(IApplicationConstant::ID, IApplicationConstant::EQUALS, $explodeData[IApplicationConstant::FUNCTION_ID])->get();
            foreach ($sf as $subExplodedData){
                $parentData = ModelSecurityFunction::where(IApplicationConstant::FUNCTION_PARENT_ID, IApplicationConstant::EQUALS, $subExplodedData->id)->get();
                $response[] = [
                    IApplicationConstant::CODE => $subExplodedData->code,
                    IApplicationConstant::NAME => $subExplodedData->name,
                    IApplicationConstant::LINK => $subExplodedData->function_url,
                    IApplicationConstant::ORDER => $subExplodedData->function_order,
                    IApplicationConstant::LEVEL => $subExplodedData->function_level,
                    IApplicationConstant::PARENT => $subExplodedData->function_parent_id,
                    IApplicationConstant::PARENT_ITEM => $parentData
                ];
            }
        }
        $loginResponse->setItem($response);
        return $loginResponse;
    }

}