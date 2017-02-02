<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */


namespace App\Repository\Impl\RegistrationDetails;


use App\Repository\IGenericRepository;

interface RegistrationDetailsRepository extends IGenericRepository
{

    /**
     * @param $dataRegistration
     * @return mixed -1 : failed, 0 success
     */
    public function singleRegistrationDetails($dataRegistration);

    /**
     * @param $dataRegistration
     * @return mixed -1 : failed, 0 success
     */
    public function bulkRegistrationDetails(array $dataRegistration);

    /**
     * @param $idRegistrationDetails
     * @return mixed -1 : failed, 0 success
     */
    public function approveSingleRegistrationDetails($idRegistrationDetails);

    /**
     * @param $idRegistrationDetails
     * @return mixed -1 : failed, 0 success
     */
    public function approveBulkRegistrationDetails($idRegistrationDetails);

    /**
     * @param $idRegistrationDetails
     * @return mixed -1 : failed, 0 success
     */
    public function declineSingleRegistrationDetails($idRegistrationDetails);

    /**
     * @param $idRegistrationDetails
     * @return mixed -1 : failed, 0 success
     */
    public function declineBulkRegistrationDetails(array $idRegistrationDetails);
}