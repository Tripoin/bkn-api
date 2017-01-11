<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 15:36
 */

namespace App\Repository\Impl\Benefit\BenefitProvider;


use App\ConstantValue\IApplicationConstant;
use App\Models\ModelBenefitProviderStaging;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryBenefitProviderSt extends ABaseRepository implements BenefitProviderStRepository
{

    /**
     * EloquentRepositoryBenefitProviderSt constructor.
     */
    public function __construct(UserRepository $_userRepository)
    {
        parent::__construct($_userRepository);
    }

    public function  getModel()
    {
        return new ModelBenefitProviderStaging();
    }

    public function insertProviderStaging($data_provider)
    {
        $data_provider->approval_status = IApplicationConstant::PROVIDER_REG_STATUS_NEW;
        $data_provider->staging_type = IApplicationConstant::STAGING_TYPE_EDIT;
        $data_provider->modified_on = $this->getCurrentTimeStamp();
        $data_provider->modified_by = $this->getUserLoggedInID();
        $data_provider->save();
    }

    public function updateProviderStaging($data_provider)
    {
        $data_provider->approval_status = IApplicationConstant::PROVIDER_REG_STATUS_NEW;
        $data_provider->staging_type = IApplicationConstant::STAGING_TYPE_EDIT;
        $data_provider->modified_on = $this->getCurrentTimeStamp();
        $data_provider->modified_by = $this->getUserLoggedInID();
        $this->getModel()->where(IApplicationConstant::ID, $data_provider->id)
            ->update($data_provider->toArray());
    }
}