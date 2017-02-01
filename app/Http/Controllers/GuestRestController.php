<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:50 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelGuest;
use App\Repository\Impl\Guest\GuestRepository;

class GuestRestController extends  ARestController
{
    public function __construct(GuestRepository $guestRepository)
    {
        $this->repository = $guestRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelGuest();
    }
}