<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 2:34 PM
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelNotification;
use App\Repository\Impl\Notification\NotificationRepository;

class NotificationRestController extends ARestController
{


    /**
     * NotificationRestController constructor.
     */
    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->repository = $notificationRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelNotification();
    }
}