<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */


namespace App\Repository\Impl\Registration;


use App\Repository\IGenericRepository;

interface RegistrationRepository extends IGenericRepository
{

    /**
     * @param $dataRegistration
     * @return mixed -1 : failed, 0 success
     */
    public function register($dataRegistration);

    public function approve($idRegistration);

    public function decline($idRegistration);
}