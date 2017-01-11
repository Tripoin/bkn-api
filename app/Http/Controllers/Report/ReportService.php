<?php

/**
 * @project pip-api.
 * @since 9/16/2016 4:04 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Report;


use App\ConstantValue\IApplicationConstant;
use App\Http\Controllers\BaseRest\ARestService;
use App\Http\Controllers\BaseRest\IRestReport;
use Illuminate\Support\Facades\Log;

class ReportService extends ARestService implements IRestReport
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

    public function getSimpleReportData()
    {
        try{
            return response()->json(
                $this->repository->getSimpleReportData(),
                http_response_code(IApplicationConstant::HTTP_RESPONSE_OK)
            );
        }catch (\Exception $e){
            Log::error('Report Service -> Error get simple report data : '.$e->getMessage());
            return $this->restUtil->responseErrorCouldNotFetchRecord();
        }
    }
}