<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\ChecklistUsage;

use App\Models\ModelChecklistUsage;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryChecklistUsage extends ABaseRepository implements ChecklistUsageRepository
{

    /**
     * @param UserRepository $p_UserRepository
     */
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelChecklistUsage();
    }




}