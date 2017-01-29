<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 11:11 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl;
use App\ConstantValue\IApplicationConstant;
use App\Dto\Entity\DTOPaging;
use App\Models\ModelSecurityUser;
use App\Repository\IGenericRepository;
use App\Repository\Impl\SecurityUser\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


/**
 * Every single Repository must extend this abstract class to perform basic inquiry, transaction and audit trailing
 *
 * Class ABaseRepository
 * @package app\Repository\Impl
 */
abstract class ABaseRepository extends ABaseAuditTrail implements IGenericRepository
{
    protected $recordActiveStatement = null;

    public abstract function  getModel();

    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        $this->recordActiveStatement = [
            IApplicationConstant::STATUS,
            IApplicationConstant::EQUALS,
            IApplicationConstant::ACTIVE
        ];
        parent::__construct($p_UserRepository);
    }

    public function all(){
        try{
            return $this->getModel()->where
            (
                [
                    $this->recordActiveStatement
                ]
            )->get();
        }catch (\Exception $e){
            Log::error($e->getMessage());
        }
    }

    public function findById($p_ID)
    {
        return $this->getModel()->find($p_ID);
    }

    public function findByCode($p_CODE)
    {
        return $this->getModel()->where(
            [
                [
                    IApplicationConstant::CODE,
                    IApplicationConstant::LIKE,
                    IApplicationConstant::PERCENTAGE . $p_CODE . IApplicationConstant::PERCENTAGE
                ],
                $this->getRecordActiveStatement()
            ]
        )->first();
    }

    public function findByName($p_NAME)
    {
        return $this->getModel()->where(
            [
                [
                    IApplicationConstant::NAME,
                    IApplicationConstant::LIKE,
                    IApplicationConstant::PERCENTAGE . $p_NAME . IApplicationConstant::PERCENTAGE
                ],
                $this->getRecordActiveStatement()
            ]

        )->first();
    }

    public function allSortedAscByParticularColumn($p_ColumnReference)
    {
        return $this->getModel()->orderBy($p_ColumnReference, IApplicationConstant::ASC)->get();
    }

    public function allSortedDescByParticularColumn($p_ColumnReference)
    {
        return $this->getModel()->orderBy($p_ColumnReference, IApplicationConstant::DESC)->get();
    }

    public function advancedPagination(DTOPaging $dtoPaging)
    {
        if((!($dtoPaging->getFilterKey() == NULL && $dtoPaging->getFilterValue() == NULL)) && ($dtoPaging->getSortingKey() == NULL && $dtoPaging->getSortingDirection() == NULL)){
            $result =
                $this->getModel()->where($dtoPaging->getFilterKey(), IApplicationConstant::LIKE, IApplicationConstant::PERCENTAGE . $dtoPaging->getFilterValue() . IApplicationConstant::PERCENTAGE)->paginate($dtoPaging->getItemNumber());
        }else if(($dtoPaging->getFilterKey() == NULL && $dtoPaging->getFilterValue() == NULL) && (!($dtoPaging->getSortingKey() == NULL && $dtoPaging->getSortingDirection() == NULL))){
            $result =
                $this->getModel()->orderBy($dtoPaging->getSortingKey(), $dtoPaging->getSortingDirection())->paginate($dtoPaging->getItemNumber());
        }else if((!($dtoPaging->getFilterKey() == NULL && $dtoPaging->getFilterValue() == NULL)) && (!($dtoPaging->getSortingKey() == NULL && $dtoPaging->getSortingDirection() == NULL))){
            $result =
                $this->getModel()->where($dtoPaging->getFilterKey(), IApplicationConstant::LIKE, IApplicationConstant::PERCENTAGE . $dtoPaging->getFilterValue() . IApplicationConstant::PERCENTAGE)
                    ->orderBy($dtoPaging->getSortingKey(), $dtoPaging->getSortingDirection())->paginate($dtoPaging->getItemNumber());
        }else{
            $result =
                $this->getModel()->paginate($dtoPaging->getItemNumber());
        }
        return $result;
    }

    public function simplePagination($p_PageLimit)
    {
        return $this->getModel()->paginate($p_PageLimit);
    }

    public function selectLOV(){
        try{
            $dataLOV =  $this->getModel()
                ->select(IApplicationConstant::ID, IApplicationConstant::NAME)
                ->where(
                    [
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
        }catch (\Exception $e){
            Log::error($e->getMessage());
        }
    }

    public function insert($p_DATA)
    {
        parent::insert($p_DATA);
        $p_DATA->save();
    }

    public function update($p_DATA)
    {
        parent::update($p_DATA);
        $this->getModel()->where(IApplicationConstant::ID, $p_DATA->id)
            ->update($p_DATA->toArray());
    }

    public function delete($p_ID)
    {
        $p_DATA = $this->findById($p_ID);
        $p_DATA->delete();
    }

    public function deleteCollection($p_IDs)
    {
        try{
            DB::beginTransaction();
            $this->getModel()
                ->whereIn(IApplicationConstant::ID, $p_IDs)
                ->delete();
            DB::commit();
        }catch (\Exception $e){
            DB::rollback();
        }
    }

    /**
     * @return mixed
     */
    public function getRecordActiveStatement()
    {
        return $this->recordActiveStatement;
    }

    /**
     * @param $p_IDs
     * @return mixed
     */
    public function approval($p_IDs){
        return $this->getModel()
            ->whereIn(IApplicationConstant::ID, $p_IDs)
            ->update([IApplicationConstant::APPROVAL_STATUS => IApplicationConstant::APPROVED,
                IApplicationConstant::APPROVAL_DATE => $this->getCurrentTimeStamp(),
                IApplicationConstant::APPROVER => $this->getUserLoggedInID()
            ]);
    }

    /**
     * @param $p_IDs
     * @return mixed
     */
    public function reject($p_IDs){
        return $this->getModel()
            ->whereIn(IApplicationConstant::ID, $p_IDs)
            ->update([IApplicationConstant::APPROVAL_STATUS => IApplicationConstant::REJECTED]);
    }

    public function getPhysicalColumnNames(){
        return $this->getModel()->getConnection()->getSchemaBuilder()->getColumnListing($this->getModel()->getTable());
    }

    public function getSimpleReportData()
    {
        $allDATA = $this->all();
        $result[] = $this->getPhysicalColumnNames();
        foreach($allDATA as $value){
            $result[] = array_values($value->toArray());
        }
        return $result;
    }


    public function hardCorePagination($p_DATA)
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