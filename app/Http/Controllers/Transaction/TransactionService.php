<?php

/**
 * @project pip-api.
 * @since 9/16/2016 3:53 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\BaseRest\ARestService;
use App\Http\Controllers\BaseRest\IRestTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class TransactionService extends ARestService implements IRestTransaction
{

    private $repository;

    private $model;

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

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    public function insert()
    {
        $p_Entity = (object)Request::json()->all();
        if(is_null($p_Entity)){
            return $this->restUtil->responseNoContent();
        }else{
            DB::beginTransaction();
            try{
                $p_Entity = $this->classCaster->cast(get_class($this->getModel()), $p_Entity);

                try{
                    $this->repository->insert($p_Entity);
                    DB::commit();
                    return $this->restUtil->responseSuccessInsert();
                }catch (\Exception $e){
                    DB::rollback();
                    Log::error('Transaction Service -> Error Insert : '.$e->getMessage());
                    return $this->restUtil->responseErrorInsert();
                }
            }catch (\Exception $e){
                DB::rollback();
                Log::error('Transaction Service -> Error Insert : '.$e->getMessage());
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    public function update()
    {
        $p_Entity = (object)Request::json()->all();
        if(is_null($p_Entity)){
            return $this->responseNoContent();
        }else{
            DB::beginTransaction();
            try{
                $p_Entity = $this->classCaster->cast(get_class($this->getModel()), $p_Entity);
                try{
                    $this->repository->update($p_Entity);
                    DB::commit();
                    return $this->restUtil->responseSuccessUpdate();
                }catch (\Exception $e){
                    DB::rollback();
                    Log::error('Transaction Service -> Error Update : '.$e->getMessage());
                    return $this->restUtil->responseErrorUpdate();
                }
            }catch (\Exception $e){
                DB::rollback();
                Log::error('Transaction Service -> Error Update : '.$e->getMessage());
                return $this->restUtil->responseInvalidJSONFormat();
            }
        }
    }

    public function delete()
    {
        $input = Request::json()->all();
        if(is_null($input)){
            return $this->restUtil->responseNoContent();
        }else{
            try{
                DB::beginTransaction();
                $this->repository->delete($input[0]);
                DB::commit();
                return $this->restUtil->responseSuccessDelete();
            }catch (\Exception $e){
                DB::rollback();
                Log::error('Transaction Service -> Error Delete : '.$e->getMessage());
                return $this->restUtil->responseErrorDelete();
            }
        }
    }

    public function insertCollection($p_DATA)
    {
        // TODO: Implement insertCollection() method.
    }

    public function updateCollection($p_DATA)
    {
        // TODO: Implement updateCollection() method.
    }

    public function deleteCollection()
    {
        $input = Request::json()->all();
        if(is_null($input)){
            return $this->responseNoContent();
        }else{
            try{
                DB::beginTransaction();
                $this->repository->deleteCollection($input);
                DB::commit();
                return $this->restUtil->responseSuccessDelete();
            }catch (\Exception $e){
                DB::rollback();
                Log::error('Transaction Service -> Error Delete Collection : '.$e->getMessage());
                return $this->restUtil->responseErrorDelete();
            }
        }
    }


}