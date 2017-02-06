<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 06/02/2017
 * Time: 23:39
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelSupportRoom;
use App\Repository\Impl\SupportRoom\SupportRoomRepository;

class SupportRoomRestController extends ARestController
{
    public function __construct(SupportRoomRepository $supportRoomRepository){
        $this->repository = $supportRoomRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelSupportRoom();
    }
}