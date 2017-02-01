<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:25 PM
 */

namespace App\Repository\Impl\SupportRoom;


use App\Models\ModelSupportRoom;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentSupportRoomRepository extends ABaseRepository implements SupportRoomRepository
{
    /**
     * EloquentRepositorySubject constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelSupportRoom();
    }
}