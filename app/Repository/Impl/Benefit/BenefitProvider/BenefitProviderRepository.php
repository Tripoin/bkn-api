<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 08/09/2016
 * Time: 14:45
 */

namespace App\Repository\Impl\Benefit\BenefitProvider;


use App\Repository\IGenericRepository;

interface BenefitProviderRepository extends IGenericRepository
{
    public function insertNewBenefitData($dataProvider);

    public function updateOnProcess($p_Id, $value);
}