<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:48 PM
 */

namespace App\Repository\Impl\Guest;


use App\Models\ModelGuest;
use App\Repository\Impl\ABaseRepository;

class EloquentGuestRepository extends ABaseRepository implements GuestRepository
{

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(GuestRepository $guestRepository)
    {
        parent::__construct($guestRepository);
    }

    public function  getModel()
    {
        return new ModelGuest();
    }
}