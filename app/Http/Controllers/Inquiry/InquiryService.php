<?php

/**
 * @project pip-api.
 * @since 9/16/2016 3:20 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Inquiry;


use App\ConstantValue\IApplicationConstant;
use App\Http\Controllers\BaseRest\ARestService;
use App\Http\Controllers\BaseRest\IRestInquiry;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class InquiryService extends ARestService implements IRestInquiry
{

    private $repository;

    /**
     * @return mixed
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param mixed $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }


    public function findById()
    {
        try{
            $data = Request::json()->all();
            if(is_null($data)) {
                return $this->restUtil->responseNoContent();
            }else{
                return response()->json(
                    $this->repository->findById($data[0]),
                    http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
                );
            }
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error find by id :'.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }

    public function findByCode()
    {
        try{
            $data = Request::json()->all();
            if(is_null($data)) {
                return $this->restUtil->responseNoContent();
            }else {
                return response()->json(
                    $this->repository->findByCode($data[0]),
                    http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
                );
            }
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error find by code :'.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }

    public function findByName()
    {
        try{
            $data = Request::json()->all();
            if(is_null($data)) {
                return $this->restUtil->responseNoContent();
            }else {
                return response()->json(
                    $this->repository->findByName($data[0]),
                    http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
                );
            }
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error find by name :'.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }

    public function all()
    {
        try{
            return response()->json(
                $this->repository->all(),
                http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
            );
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error select all data :'.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }

    public function advancedPagination()
    {
        try{
            $input = Request::json()->all();
            if(is_null($input)){
                return $this->restUtil->responseNoContent();
            }else{
                $this->advancePaginationKeySelector($input);
                return $this->repository->advancedPagination($this->dtoPaging);
            }
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error select advanced pagination :'.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }

    public function simplePagination()
    {
        try{
            $input = Request::json()->all();
            if(is_null($input)){
                return $this->restUtil->responseNoContent();
            }else{
                return $this->repository->simplePagination($input[0]);
            }
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error select simple pagination :'.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }

    public function selectLOV()
    {
        try{
            return response()->json(
                $this->repository->selectLOV(),
                http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
            );
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error select LOV : '.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }

    public function getPhysicalColumnNames()
    {
        try{
            return response()->json(
                $this->repository->getPhysicalColumnNames(),
                http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
            );
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error get physical column names :'.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }

    function advancePaginationKeySelector($p_Data)
    {
        $this->dtoPaging->setItemNumber($p_Data[IApplicationConstant::ITEM_NUMBER]);
        $this->dtoPaging->setFilterKey($p_Data[IApplicationConstant::FILTER_KEY]);
        $this->dtoPaging->setFilterValue($p_Data[IApplicationConstant::FILTER_VALUE]);
        $this->dtoPaging->setSortingKey($p_Data[IApplicationConstant::SORTING_KEY]);
        $this->dtoPaging->setSortingDirection($p_Data[IApplicationConstant::SORTING_DIRECTION]);
    }


    public function hardCorePagination()
    {
        try{
            $input = Request::json()->all();
            if(is_null($input)){
                return $this->restUtil->responseNoContent();
            }else{
                return $this->repository->hardCorePagination($input);
            }
        }catch (\Exception $e){
            Log::error('Inquiry Service -> error hardcore pagination:'.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }
}