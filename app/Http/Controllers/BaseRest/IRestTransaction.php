<?php
/**
 * @package app\Http\Controllers\BaseRest
 * @since 12/30/2015 - 5:46 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */


namespace App\Http\Controllers\BaseRest;


interface IRestTransaction
{
    public function insert();

    public function update();

    public function delete();

    public function insertCollection($p_DATA);

    public function updateCollection($p_DATA);

    public function deleteCollection();

}