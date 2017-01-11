<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 08/09/2016
 * Time: 14:45
 */

namespace App\Repository\Impl\Benefit\BenefitProvider;


use App\ConstantValue\IApplicationConstant;
use App\Models\ModelBenefitProvider;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryBenefitProvider extends ABaseRepository implements BenefitProviderRepository
{
    private $lastidprovider;

    /**
     * EloquentRepositoryBenefitProvider constructor.
     */
    public function __construct(UserRepository $_userRepository)
    {
        parent::__construct($_userRepository);
    }

    public function  getModel()
    {
        return new ModelBenefitProvider();
    }


    public function insertNewBenefitData($data_provider)
    {
        parent::insert($data_provider);
        $data_provider->registration_date = $this->getCurrentTimeStamp();
        $data_provider->approval_status = IApplicationConstant::STATUS_NEW;
        $data_provider->onprocess = 0;
        $data_provider->save();
        $this->lastidprovider = $this->findById($data_provider->id);
        return $this->lastidprovider;
    }

    public function updateOnProcess($p_Id, $value)
    {
        return $this->getModel()
            ->where(IApplicationConstant::ID, $p_Id)
            ->update([IApplicationConstant::BENEFIT_PROVIDER_COL_ONPRO => $value,
                IApplicationConstant::MODIFIED_ON => $this->getCurrentTimeStamp(),
                IApplicationConstant::MODIFIED_BY => $this->getUserLoggedInID()
            ]);
    }
}