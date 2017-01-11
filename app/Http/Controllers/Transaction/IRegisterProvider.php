<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 15:17
 */

namespace App\Http\Controllers\Transaction;


interface IRegisterProvider
{
    /**
     * registration new benefit provider
     * @return mixed
     */
    public function registerNewProvider();

    /**
     * approval new benefit provider
     * collection approval
     * @return mixed
     */
    public function approvalRegisteredNewProvider();

    /**
     * rejected new benefit provider
     * collection rejected
     * @return mixed
     */
    public function rejectNewProvider();
}