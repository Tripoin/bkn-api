<?php

/**
 * @project pip-rest.
 * @since 8/18/2016 5:13 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;

use App\ConstantValue\IApplicationConstant;
use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelProvinsi;
use App\Repository\Impl\Provinsi\ProvinsiRepository;
use Illuminate\Support\Facades\Request;

class ProvinsiRestController extends ARestController {
    /*
      /**
     * @param ProvinsiRepository $p_RepositoryProvinsi
     */

    public function __construct(ProvinsiRepository $p_RepositoryProvinsi) {
        $this->repositoryProvinsi = $p_RepositoryProvinsi;
        parent::__construct();
    }

    function selectAll() {
        $data = $this->repositoryProvinsi->all();
        $response = $this->actionSelect($this->explodeDataToJsonArray($data));
        return response()->json($response, $response->getStatusCode());
    }

    function selectByName($p_EntityName) {
        // TODO: Implement selectByName() method.
    }

    function selectByCode($p_EntityCode) {
        // TODO: Implement selectByCode() method.
    }

    function getByCode($code) {
        $data = ModelProvinsi::where(
                        IApplicationConstant::MODEL_PROVINSI_COL_CODE, IApplicationConstant::EQUALS, $code
                )->get();
        $response = $this->actionSelect($this->explodeDataToJsonArray($data));
//        return response()->json($response, $response->getStatusCode());
        return $data;
    }

    function pageAble() {
        $input = Request::json()->all();
        $this->pageKeySelector($input);
        if ((!($this->dtoPaging->getFilterKey() == NULL && $this->dtoPaging->getFilterValue() == NULL)) && ($this->dtoPaging->getSortingKey() == NULL && $this->dtoPaging->getSortingDirection() == NULL)) {
            $result = ModelProvinsi::where($this->dtoPaging->getFilterKey(), IApplicationConstant::LIKE, IApplicationConstant::PERCENTAGE . $this->dtoPaging->getFilterValue() . IApplicationConstant::PERCENTAGE)->paginate($this->dtoPaging->getItemNumber());
        } else if (($this->dtoPaging->getFilterKey() == NULL && $this->dtoPaging->getFilterValue() == NULL) && (!($this->dtoPaging->getSortingKey() == NULL && $this->dtoPaging->getSortingDirection() == NULL))) {
            $result = ModelProvinsi::orderBy($this->dtoPaging->getSortingKey(), $this->dtoPaging->getSortingDirection())->paginate($this->dtoPaging->getItemNumber());
        } else if ((!($this->dtoPaging->getFilterKey() == NULL && $this->dtoPaging->getFilterValue() == NULL)) && (!($this->dtoPaging->getSortingKey() == NULL && $this->dtoPaging->getSortingDirection() == NULL))) {
            $result = ModelProvinsi::where($this->dtoPaging->getFilterKey(), IApplicationConstant::LIKE, IApplicationConstant::PERCENTAGE . $this->dtoPaging->getFilterValue() . IApplicationConstant::PERCENTAGE)
                            ->orderBy($this->dtoPaging->getSortingKey(), $this->dtoPaging->getSortingDirection())->paginate($this->dtoPaging->getItemNumber());
        } else {
            $result = ModelProvinsi::paginate($this->dtoPaging->getItemNumber());
        }
        return $result;
    }

    function simplePagination($limit) {
        return $this->repositoryProvinsi->paged($limit);
    }

    function insert() {
        $p_Entity = (object) Request::json()->all();
        if (is_null($p_Entity)) {
            return response()->json($this->generateBaseFailedResponse(), $this->statusCode);
        } else {
            $p_Entity = $this->classCaster->cast(get_class(new ModelProvinsi()), $p_Entity);
            $p_Entity->save();
            return response()->json($this->generateBaseSuccessResponse($p_Entity[IApplicationConstant::NAME]), $this->statusCode);
        }
    }

    function update() {
        $p_Entity = (object) Request::json()->all();
        if (is_null($p_Entity)) {
            return response()->json($this->generateBaseFailedResponse(), $this->statusCode);
        } else {
            $p_Entity = $this->classCaster->cast(get_class(new ModelProvinsi()), $p_Entity);
            $newData = ModelProvinsi::find($p_Entity[IApplicationConstant::ID]);
            $newData->code = $p_Entity[IApplicationConstant::CODE];
            $newData->name = $p_Entity[IApplicationConstant::NAME];
//            $newData->description = $p_Entity[IApplicationConstant::DESCRIPTION];
            $newData->save();
            return response()->json($this->generateBaseSuccessResponse($p_Entity[IApplicationConstant::NAME]), $this->statusCode);
        }
    }

    function delete() {
        $input = Request::json()->all();
        $data = ModelProvinsi::find($input[IApplicationConstant::ID]);
        if (is_null($data)) {
            return response()->json($this->generateBaseFailedResponse(), $this->statusCode);
        } else {
            $deletedData = $data;
            $data->delete();
            return response()->json($this->generateBaseSuccessResponse($deletedData->id), $this->statusCode);
        }
    }

    function explodeDataToJsonArray($p_Data) {
        $response = [
            IApplicationConstant::MODEL_PROVINSI_NAME => []
        ];
        foreach ($p_Data as $explodedData) {
            $response[IApplicationConstant::MODEL_PROVINSI_NAME][] = [
                IApplicationConstant::MODEL_PROVINSI_COL_ID_PROVINSI => $explodedData->id,
                IApplicationConstant::MODEL_PROVINSI_COL_CODE => $explodedData->code,
                IApplicationConstant::MODEL_PROVINSI_COL_NAMA => $explodedData->name,
            ];
        }
        return $response;
    }

        public function getModel() {
        
    }

}
