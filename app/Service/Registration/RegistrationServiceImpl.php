<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Service\Registration;


use App\Service\ATripoinService;
use Illuminate\Support\Facades\Log;

class RegistrationServiceImpl extends ATripoinService implements IRegistrationService
{

    public function register($dataRegistration)
    {
        $this->repository->register($dataRegistration);
    }

    public function approveRegistration($idRegistration)
    {
        $this->repository->approve($idRegistration);
    }

    public function declineRegistration($idRegistration)
    {
        $this->repository->decline($idRegistration);
    }
}