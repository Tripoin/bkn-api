<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelContact;
use App\Repository\Impl\Contact\ContactRepository;

class ContactRestController extends ARestController
{

    /**
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->repository = $contactRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelContact();
    }
}