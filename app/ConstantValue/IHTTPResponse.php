<?php
/**
 * @project pip-api.
 * @since 9/5/2016 4:33 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\ConstantValue;


interface IHTTPResponse
{
    const HTTP_RESPONSE_OK                      = 200;
    const HTTP_RESPONSE_CREATED                 = 201;
    const HTTP_RESPONSE_ACCEPTED                = 202;
    const HTTP_RESPONSE_NO_CONTENT              = 204;
    const HTTP_RESPONSE_BAD_REQUEST             = 400;
    const HTTP_RESPONSE_UNAUTHORIZED            = 401;
    const HTTP_RESPONSE_FORBIDDEN               = 403;
    const HTTP_RESPONSE_NOT_FOUND               = 404;
    const HTTP_RESPONSE_METHOD_NOT_ALLOWED      = 405;
    const HTTP_RESPONSE_UNSUPPORTED_MEDIA_TYPE  = 415;
    const HTTP_RESPONSE_INTERNAL_SERVER_ERROR   = 500;
    const HTTP_RESPONSE_BAD_GATEWAY             = 502;
    const HTTP_RESPONSE_SERVICE_UNAVAILABLE     = 503;
    const HTTP_RESPONSE_GATEWAY_TIMEOUT         = 504;
}