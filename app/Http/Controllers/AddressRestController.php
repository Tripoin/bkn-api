<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelAddress;
use app\Repository\Impl\Room\RoomRepository;

class AddressRestController extends ARestController
{

    public function __construct(RoomRepository $roomRepository)
    {
        $this->repository = $roomRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelAddress();
    }
}