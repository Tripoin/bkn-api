<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 06/09/2016
 * Time: 18:45
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelCity;
use App\Repository\Impl\City\CityRepository;
use Illuminate\Support\Facades\Request;
use App\ConstantValue\IApplicationConstant;

class CityRestController extends ARestController
{


    /**
     * @param CityRepository $cityRepository
     */
    public function __construct(CityRepository $cityRepository)
    {
        $this->repository = $cityRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelCity();
    }
    
    public function findByIdLovProvince()
    {
        try{
            $data = Request::json()->all();
            return response()->json(
                $this->repository->selectLOVbyIdProvince($data[0]),
                http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
            );
        }catch (\Exception $e){
            return response()->json(
                IApplicationConstant::ERROR_COULD_NOT_FETCH_RECORD,
                http_response_code(IApplicationConstant::HTTP_RESPONSE_NOT_FOUND)
            );
        }
    }
}