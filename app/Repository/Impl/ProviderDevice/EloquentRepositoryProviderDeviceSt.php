<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 15:41
 */

namespace App\Repository\Impl\ProviderDevice;


use App\ConstantValue\IApplicationConstant;
use App\Models\ModelProviderDeviceSt;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryProviderDeviceSt extends ABaseRepository implements ProviderDeviceStRepository
{
    /**
     * EloquentRepositoryProviderDeviceSt constructor.
     */
    public function __construct(UserRepository $_userRepository)
    {
        parent::__construct($_userRepository);
    }

    public function  getModel()
    {
        return new ModelProviderDeviceSt();
    }

    public function insertProviderDeviceStg($data_device_stg)
    {
        $data_device_stg->modified_on = $this->getCurrentTimeStamp();
        $data_device_stg->modified_by = $this->getUserLoggedInID();
        $data_device_stg->save();
    }

    public function updateProviderDeviceStg($data_device_stg)
    {
        return $this->getModel()
            ->where(IApplicationConstant::PROVIDER_DEVICE_COL_PROVIDER_ID, $data_device_stg->provider_id)
            ->update([IApplicationConstant::PROVIDER_DEVICE_COL_DEVICE_SN => $data_device_stg->device_sn,
                'modified_on' => $this->getCurrentTimeStamp(),
                'modified_by' => $this->getUserLoggedInID()
            ]);
    }
}