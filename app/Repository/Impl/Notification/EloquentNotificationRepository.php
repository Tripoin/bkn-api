<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:32 PM
 */

namespace App\Repository\Impl\Notification;


use App\Models\ModelNotification;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentNotificationRepository extends ABaseRepository implements NotificationRepository
{

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function getModel()
    {
        return new ModelNotification();
    }
}