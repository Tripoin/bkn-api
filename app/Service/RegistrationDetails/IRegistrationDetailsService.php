<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Service\RegistrationDetails;


interface IRegistrationDetailsService
{

    public function registerSingle($dataRegistrationDetails);

    public function registerBulk(array $dataRegistrationDetailsBulk);

    public function approveSingle($idRegistrationDetails);

    public function approveBulk(array $dataRegistrationDetailsBulk);

    public function declineSingle($idRegistrationDetails);

    public function declineBulk(array $idRegistrationDetails);
}