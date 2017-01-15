<?php
/**
 * @package app\ConstantValue
 * @since 1/12/2016 - 9:09 AM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\ConstantValue;


interface IJSONConstant
{
    const ITEM_NUMBER       = 'item_number';
    const FILTER_KEY        = 'filter_key';
    const FILTER_VALUE      = 'filter_value';
    const SORTING_KEY       = 'sorting_key';
    const SORTING_DIRECTION = 'sorting_direction';
    const FILTER_DATA       = 'filter_data';
    const ASCENDING         = 'ascending';
    const DESCENDING        = 'descending';
    const GROUP_PARAM_CODE  = 'group_param_code';
    const APP_PARAM_CODE    = 'app_param_code';
    const USER_CODE         = 'code';
    const ITEM              = 'item';
    const LINK              = 'link';
    const ORDER             = 'order';
    const LEVEL             = 'level';
    const PARENT            = 'parent';
    const PARENT_ITEM       = 'parent_item';

    const TOKEN                         = 'token';
    const LABEL             = 'label';

    /*ERROR*/
    const ERROR                         = 'error';
    const ERROR_CREDENTIAL_IS_EMPTY     = '-1';
    const ERROR_INVALID_CREDENTIALS     = '-2';
    const ERROR_COULD_NOT_CREATE_TOKEN  = '-3';
    const ERROR_COULD_NOT_LOGOUT        = '-4';
    const ERROR_COULD_NOT_FETCH_RECORD  = '-5';
    const ERROR_NO_CONTENT              = '-6';
    const ERROR_INVALID_JSON_FORMAT     = '-7';
    const ERROR_INSERT_DATA             = '-8';
    const ERROR_UPDATE_DATA             = '-9';
    const ERROR_DELETE_DATA             = '-10';

    /*SUCCESS*/
    const SUCCESS                       = 'success';
    const SUCCESS_LOGOUT                = '1';
    const SUCCESS_INSERT                = '2';
    const SUCCESS_UPDATE                = '3';
    const SUCCESS_DELETE                = '4';
}