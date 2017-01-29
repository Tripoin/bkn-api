<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelRoom;
use App\Repository\Impl\Facility\FacilityRepository;
use App\Repository\Impl\Room\RoomRepository;
use Illuminate\Support\Facades\Log;

class RoomRestController extends ARestController
{

    private $facilityRepository;

    public function __construct(RoomRepository $roomRepository, FacilityRepository $facilityRepository)
    {
        $this->repository = $roomRepository;
        $this->facilityRepository = $facilityRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelRoom();
    }


    public function getRoomWithFacility(){
        $result = $this->hardCorePagination();
        $content = json_encode($result);
        $content = json_decode($content)->data;
        foreach($content as $item){
            $item->facility_id = $this->facilityRepository->findById($item->facility_id);
        }
        return $content;
    }
}