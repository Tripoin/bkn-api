<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Service\Registration;


use App\Service\ITripoinService;

interface IRegistrationService extends ITripoinService
{

    /**
     * @param $dataRegistration
     * @return mixed -1 : failed , 0 : failed
     */
    public function register($dataRegistration);

    public function approveRegistration($idRegistration);

    public function declineRegistration($idRegistration);
}