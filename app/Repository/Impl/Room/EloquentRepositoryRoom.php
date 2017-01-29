<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\Room;

use App\ConstantValue\IApplicationConstant;
use App\Models\ModelRoom;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryRoom extends ABaseRepository implements RoomRepository
{

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelRoom();
    }

    public function hardcorePaginationRoomWithFacility($p_DATA)
    {
        $itemNumber = $p_DATA[IApplicationConstant::ITEM_NUMBER];
        $sortingKey = $p_DATA[IApplicationConstant::SORTING_KEY];
        $sortingDirection = $p_DATA[IApplicationConstant::SORTING_DIRECTION];
        $filterData = $p_DATA[IApplicationConstant::FILTER_DATA];

        foreach ($filterData as $filter) {
            $filterQuery [] = array(
                $filter[IApplicationConstant::FILTER_KEY],
                IApplicationConstant::LIKE,
                IApplicationConstant::PERCENTAGE . $filter[IApplicationConstant::FILTER_VALUE] . IApplicationConstant::PERCENTAGE
            );
        }
        if(
        ((count($filterData)>0) &&($sortingKey == NULL && $sortingDirection == NULL))
        ){
            $result =
                $this->getModel()->where($filterQuery)
                    ->paginate($itemNumber);
        }else if(
        (count($filterData)<=0 && (!($sortingKey == NULL && $sortingDirection == NULL)))
        ){
            $result =
                $this->getModel()->orderBy($sortingKey, $sortingDirection)
                    ->paginate($itemNumber);
        }else if(count($filterData)>0 && (!($sortingKey == NULL && $sortingDirection == NULL))){
            $result =
                $this->getModel()->where($filterQuery)
                    ->orderBy($sortingKey, $sortingDirection)
                    ->paginate($itemNumber);
        }else{
            $result =
                $this->getModel()->paginate($itemNumber);
        }
        return $result;
    }
}