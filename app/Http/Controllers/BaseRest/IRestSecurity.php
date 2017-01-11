<?php
/**
 * @package app\Http\Controllers\BaseRest
 * @since 12/30/2015 - 5:43 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */


namespace App\Http\Controllers\BaseRest;


interface IRestSecurity
{
    function doLogin();

    function executeLogin($p_UserData);

    function doLogout();

    function executeLogout($p_UserData);

    function generateMenuResponse($p_Data);

}