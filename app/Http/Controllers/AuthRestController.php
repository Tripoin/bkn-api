<?php

/**
 * @project pip-api.
 * @since 8/25/2016 12:03 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;
use App\ConstantValue\IApplicationConstant;
use App\Repository\Impl\SecurityUser\UserRepository;
use App\Util\PIPCrypt;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthRestController extends Controller
{

    protected $userCode;

    /**
     * @param UserRepository $p_RepositoryUser
     */
    public function __construct(UserRepository $p_RepositoryUser)
    {
        $this->repositoryUser = $p_RepositoryUser;
    }

    /**
     * API Login, on success return JWT Auth token
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request) {
        $auth = $request->header(IApplicationConstant::AUTHORIZATION);
        $pipCrypt = new PIPCrypt();

        try{
            $decrypted = $pipCrypt->decrypt($auth);
            $explodedDecrypt = explode(IApplicationConstant::COLON, $decrypted);
            $this->userCode = $explodedDecrypt[0];

            $credentials = [
                IApplicationConstant::USER_CODE=>$explodedDecrypt[0],
                IApplicationConstant::PASSWORD=>$explodedDecrypt[1]
            ];

            $this->repositoryUser->doLogin($this->userCode);
        }catch (\Exception $e){
            return response()->json(
                [
                    IApplicationConstant::ERROR => IApplicationConstant::ERROR_CREDENTIAL_IS_EMPTY
                ],
                http_response_code(IApplicationConstant::HTTP_RESPONSE_UNAUTHORIZED)
            );
        }

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(
                    [
                        IApplicationConstant::ERROR => IApplicationConstant::ERROR_INVALID_CREDENTIALS
                    ],
                    http_response_code(IApplicationConstant::HTTP_RESPONSE_UNAUTHORIZED)
                );
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(
                [
                    IApplicationConstant::ERROR => IApplicationConstant::ERROR_COULD_NOT_CREATE_TOKEN
                ],
                http_response_code(IApplicationConstant::HTTP_RESPONSE_INTERNAL_SERVER_ERROR)
            );
        }

        //$result = array('auth'=>compact(IApplicationConstant::TOKEN), 'abc'=>'abc');
        // all good so return the token
        return response()->json(compact(IApplicationConstant::TOKEN));
    }


    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request) {
        $this->validate($request, [
            IApplicationConstant::TOKEN => IApplicationConstant::REQUIRED
        ]);

        try{
            //JWTAuth::setToken($request->input('token'))->invalidate();
            //JWTAuth::parseToken()->invalidate();
            //JWTAuth::invalidate(JWTAuth::getToken());
            //JWTAuth::invalidate($request->input('token'));
            $this->repositoryUser->doLogout($this->userCode);

            return response()->json(
                [
                    IApplicationConstant::SUCCESS => IApplicationConstant::SUCCESS_LOGOUT
                ],
                http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
            );
        }catch (\Exception $e){
            return response()->json(
                [
                    IApplicationConstant::ERROR =>IApplicationConstant::ERROR_COULD_NOT_LOGOUT
                ],
                http_response_code(IApplicationConstant::HTTP_RESPONSE_INTERNAL_SERVER_ERROR)
            );
        }
    }
}