<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 11:22
 */

namespace App\Repository\Impl\ProviderDevice;


use App\Repository\IGenericRepository;

interface ProviderDeviceStRepository extends IGenericRepository
{
    public function insertProviderDeviceStg($data_device_stg);

    public function updateProviderDeviceStg($data_device_stg);
}