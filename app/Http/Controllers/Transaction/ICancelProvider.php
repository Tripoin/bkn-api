<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 14/09/2016
 * Time: 16:25
 */

namespace App\Http\Controllers\Transaction;


interface ICancelProvider
{
    public function listForCancellation();

    public function doCancellation();

    public function listForApprovedCancel();

    public function approveCancellation();

    public function rejectCancellation();
}