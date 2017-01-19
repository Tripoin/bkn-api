<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelContactMessage;
use App\Repository\Impl\ContactMessage\ContactMessageRepository;

class ContactMessageRestController extends ARestController
{

    /**
     * @param ContactMessageRepository $contactMessageRepository
     */
    public function __construct(ContactMessageRepository $contactMessageRepository)
    {
        $this->repository = $contactMessageRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelContactMessage();
    }
}