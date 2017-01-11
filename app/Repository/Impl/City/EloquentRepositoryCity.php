<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 06/09/2016
 * Time: 14:37
 */

namespace App\Repository\Impl\City;


use App\Models\ModelCity;
use App\Repository\Impl\ABaseRepository;
use App\ConstantValue\IApplicationConstant;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryCity extends ABaseRepository implements CityRepository
{


    /**
     * EloquentRepositoryCity constructor.
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelCity();
    }
    
    public function selectLOVbyIdProvince($p_ID_PROVINCE){
        $dataLOV =  $this->getModel()
            ->select(IApplicationConstant::ID, IApplicationConstant::NAME)
            ->where(
            [ 
                [
                    IApplicationConstant::CITY_COL_ID_PROVINCE,
                    IApplicationConstant::EQUALS,
                    $p_ID_PROVINCE
                ],
                $this->getRecordActiveStatement()
            ]
        )->get();

        foreach ($dataLOV as $data) {
            $result [] = [
                IApplicationConstant::ID=>$data->id,
                IApplicationConstant::LABEL=>$data->name
            ];
        }

        return $result;
    }
}