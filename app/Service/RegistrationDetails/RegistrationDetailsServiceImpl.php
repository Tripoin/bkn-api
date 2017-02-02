<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Service\RegistrationDetails;


use App\Service\ATripoinService;

class RegistrationDetailsServiceImpl extends ATripoinService implements IRegistrationDetailsService
{

    public function registerSingle($dataRegistrationDetails)
    {
        $this->repository->registerSingle($dataRegistrationDetails);
    }

    public function registerBulk(array $dataRegistrationDetailsBulk)
    {
        $this->repository->registerBulk($dataRegistrationDetailsBulk);
    }

    public function approveSingle($idRegistrationDetails)
    {
        $this->repository->approveSingle($idRegistrationDetails);
    }

    public function  approveBulk(array $dataRegistrationDetailsBulk)
    {
        $this->repository->approveBulk($dataRegistrationDetailsBulk);
    }

    public function declineSingle($idRegistrationDetails)
    {
        $this->repository->declineSingle($idRegistrationDetails);
    }

    public function declineBulk(array $idRegistrationDetails)
    {
        $this->repository->declineBulk($idRegistrationDetails);
    }
}