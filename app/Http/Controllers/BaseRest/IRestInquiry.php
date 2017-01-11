<?php
/**
 * @package app\Http\Controllers\BaseRest
 * @since 12/30/2015 - 5:43 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */


namespace App\Http\Controllers\BaseRest;


interface IRestInquiry
{
    public function findById();

    public function findByCode();

    public function findByName();

    public function all();

    public function advancedPagination();

    public function hardCorePagination();

    public function simplePagination();

    public function selectLOV();

    public function getPhysicalColumnNames();

}