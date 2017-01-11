<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 14/09/2016
 * Time: 16:18
 */

namespace App\Repository\Impl\Benefit\CancelBenefit;


use App\ConstantValue\IApplicationConstant;
use App\Models\ModelTrxCancelProvider;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryCancelBenefit extends ABaseRepository implements CancelBenefitRepository
{


    /**
     * EloquentRepositoryCancelBenefit constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function  getModel()
    {
        return new ModelTrxCancelProvider();
    }

    public function insertTrxCancel($data_provider)
    {
        $data_provider->cancellation_date = $this->getCurrentTimeStamp();
        $data_provider->approval_status = 0;
        $data_provider->modified_on = $this->getCurrentTimeStamp();
        $data_provider->modified_by = $this->getUserLoggedInID();
        $data_provider->save();
    }

    public function updateTrxCancel($data_provider)
    {
        $data_provider->cancellation_date = $this->getCurrentTimeStamp();
        $data_provider->approval_status = 0;
        $data_provider->modified_on = $this->getCurrentTimeStamp();
        $data_provider->modified_by = $this->getUserLoggedInID();

        $this->getModel()->where(IApplicationConstant::ID, $data_provider->id)
            ->update($data_provider->toArray());

    }

    public function rejected($data_cancel)
    {
        return $this->getModel()
            ->whereIn(IApplicationConstant::ID, $data_cancel->id)
            ->update([IApplicationConstant::APPROVAL_STATUS => IApplicationConstant::REJECTED,
                    IApplicationConstant::TRX_CANCEL_PROVIDER_COL_REMARK => $data_cancel->remarks]);
    }
}