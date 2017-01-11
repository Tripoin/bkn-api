<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 14/09/2016
 * Time: 16:17
 */

namespace App\Repository\Impl\Benefit\CancelBenefit;


use App\Repository\IGenericRepository;

interface CancelBenefitRepository extends IGenericRepository
{
    public function insertTrxCancel($data_provider);

    public function updateTrxCancel($data_provider);

    public function rejected($data_cancel);
}