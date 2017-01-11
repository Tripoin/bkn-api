<?php
/**
 * @package app\Http\Controllers\BaseRest
 * @since 1/25/2016 - 7:14 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\BaseRest;

interface IRestController extends IRestInquiry, IRestTransaction, IRestReport
{
    public function getRepository();

    public function getModel();
}
