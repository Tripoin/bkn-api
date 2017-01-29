<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelRegistration;
use App\Repository\Impl\Registration\RegistrationRepository;

class RegistrationRestController extends ARestController
{

    public function __construct(RegistrationRepository $registrationRepository)
    {
        $this->repository = $registrationRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelRegistration();
    }
}