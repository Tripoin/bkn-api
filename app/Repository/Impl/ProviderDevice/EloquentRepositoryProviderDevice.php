<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 09/09/2016
 * Time: 15:39
 */

namespace App\Repository\Impl\ProviderDevice;


use App\Models\ModelProviderDevice;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryProviderDevice extends ABaseRepository implements ProviderDeviceRepository
{
    /**
     * EloquentRepositoryProviderDevice constructor.
     */
    public function __construct(UserRepository $_userRepository)
    {
        parent::__construct($_userRepository);
    }

    public function  getModel()
    {
        return new ModelProviderDevice();
    }
}