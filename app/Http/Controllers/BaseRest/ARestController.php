<?php
/**
 * @package app\Http\Controllers\BaseRest
 * @since 2/24/2016 - 10:48 AM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\BaseRest;

use App\Http\Controllers\Inquiry\InquiryService;
use App\Http\Controllers\Report\ReportService;
use App\Http\Controllers\Transaction\TransactionService;


abstract class ARestController extends SimpleRestController implements IRestController {

    protected $repository;
    protected $inquiryService;
    protected $transactionService;
    protected $reportService;

    /**
     * -------------------------------------------
     * ARestController constructor.
     * -------------------------------------------
     * <p>
     *      This will setup services which is as basic usage for every single MDA
     * </p>
     * <ol>
     *      <li>Inquiry Service</li>
     *      <li>Transaction Service</li>
     *      <li>Report Service</li>
     * </ol>
     * -------------------------------------------
     */
    public function __construct()
    {
        parent::__construct();

        /*SETUP INQUIRY SERVICE*/
        $this->inquiryService = new InquiryService();
        $this->inquiryService->setRepository($this->getRepository());

        /*SETUP TRANSACTION SERVICE*/
        $this->transactionService = new TransactionService();
        $this->transactionService->setRepository($this->getRepository());
        $this->transactionService->setModel($this->getModel());

        /*SETUP REPORT SERVICE*/
        $this->reportService = new ReportService();
        $this->reportService->setRepository($this->getRepository());
    }

    public function all()
    {
        return $this->inquiryService->all();
    }

    public function findById()
    {
        return $this->inquiryService->findById();
    }

    public function findByCode()
    {
        return $this->inquiryService->findByCode();
    }

    public function findByName()
    {
        return $this->inquiryService->findByName();
    }

    public function advancedPagination()
    {
        return $this->inquiryService->advancedPagination();
    }

    public function simplePagination()
    {
        return $this->inquiryService->simplePagination();
    }

    public function selectLOV(){
        return $this->inquiryService->selectLOV();
    }

    public function hardCorePagination(){
        return $this->inquiryService->hardCorePagination();
    }

    public function insert()
    {
        return $this->transactionService->insert();
    }

    public function update()
    {
        return $this->transactionService->update();
    }

    public function delete()
    {
        return $this->transactionService->delete();
    }

    function deleteCollection()
    {
        return $this->transactionService->deleteCollection();
    }

    public function getPhysicalColumnNames()
    {
        return $this->inquiryService->getPhysicalColumnNames();
    }

    public function getRepository()
    {
        return $this->repository;
    }

    public function getSimpleReportData()
    {
        return $this->reportService->getSimpleReportData();
    }

    function insertCollection($p_CollectionEntity)
    {
        // TODO: Implement insertCollection() method.
    }

    public function updateCollection($p_DATA)
    {
        // TODO: Implement updateCollection() method.
    }
}
