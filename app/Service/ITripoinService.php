<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Service;


interface ITripoinService
{
    /**
     * @return mixed
     */
    public function getRepository();

    /**
     * @param mixed $repository
     */
    public function setRepository($repository);
}