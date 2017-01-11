<?php
/**
 * @package App\Util
 * @since 12/30/2016 - 1:01 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */
namespace App\Util;

use App\ConstantValue\IApplicationConstant;

class RestUtil {

    protected $jsonSerializer;

    function getJsonSerializer() {
        $this->jsonSerializer = new CleanJsonSerializer();
        return $this->jsonSerializer;
    }

    function escapeJsonString($value) {
        # list from www.json.org: (\b backspace, \f formfeed)    
        $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
        $replacements = array("");
        $result = str_replace($escapers, $replacements, $value);
        return $result;
    }
    
    function getJsonData($data){
        $var = get_object_vars($data);
        foreach($var as &$value){
           if(is_object($value) && method_exists($value,'getJsonData')){
              $value = $value->getJsonData();
           }
        }
        return $var;
    }

    public function responseSuccessInsert(){
        return response()->json(
            IApplicationConstant::SUCCESS_INSERT,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_OK));
    }

    public function responseErrorInsert(){
        return response()->json(
            IApplicationConstant::ERROR_INSERT_DATA,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_BAD_REQUEST));
    }

    public function responseSuccessUpdate(){
        return response()->json(
            IApplicationConstant::SUCCESS_UPDATE,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_OK));
    }

    public function responseErrorUpdate(){
        return response()->json(
            IApplicationConstant::ERROR_UPDATE_DATA,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_BAD_REQUEST));
    }

    public function responseSuccessDelete(){
        return response()->json(
            IApplicationConstant::SUCCESS_DELETE,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_OK));
    }

    public function responseErrorDelete(){
        return response()->json(
            IApplicationConstant::ERROR_DELETE_DATA,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_BAD_REQUEST));
    }

    public function responseErrorCouldNotFetchRecord(){
        return response()->json(
            IApplicationConstant::ERROR_COULD_NOT_FETCH_RECORD,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_NOT_FOUND)
        );
    }

    public function responseNoContent(){
        return response()->json(
            IApplicationConstant::ERROR_NO_CONTENT,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_NO_CONTENT));
    }

    public function responseInvalidJSONFormat(){
        return response()->json(
            IApplicationConstant::ERROR_INVALID_JSON_FORMAT,
            http_response_code(IApplicationConstant::HTTP_RESPONSE_BAD_REQUEST));
    }
}
