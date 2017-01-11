<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 13/09/2016
 * Time: 11:40
 */

namespace App\Http\Controllers\Transaction;


interface IEditedProvider
{
    /**
     * save benefit provider after(edited)
     * @return mixed
     */
    public function saveEdited();

    /**
     * approve benefit provider after(edited)
     * @return mixed
     */
    public function approvedEdited();

    /**
     * reject benefit provider after(edited)
     * @return mixed
     */
    public function rejectedEdited();
}