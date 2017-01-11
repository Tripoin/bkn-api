<?php
/**
 * @package app\ConstantValue
 * @since 1/12/2016 - 10:10 AM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\ConstantValue;


interface IQueryConstant
{
    const LIKE          = 'LIKE';
    const EQUALS        = '=';
    const GREATER_THAN  = '>';
    const LESS_THAN     = '<';
    const GREATER_OR_EQUALS_THAN    = '>=';
    const LESS_OR_EQUALS_THAN       = '>=';
    const ASC 		    = 'ASC';
    const DESC 		    = 'DESC';
    const ACTIVE        = '1';
    const NOT_ACTIVE    = '0';
}