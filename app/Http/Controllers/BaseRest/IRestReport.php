<?php
/**
 * @project pip-api.
 * @since 9/15/2016 2:51 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\BaseRest;


interface IRestReport
{
    public function getSimpleReportData();
}