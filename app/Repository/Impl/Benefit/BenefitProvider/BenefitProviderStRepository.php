<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 08/09/2016
 * Time: 14:25
 */

namespace App\Repository\Impl\Benefit\BenefitProvider;


use App\Repository\IGenericRepository;

interface BenefitProviderStRepository extends IGenericRepository
{
    public function insertProviderStaging($data_provider);

    public function updateProviderStaging($data_provider);
}