<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\Documentation;


use App\Models\ModelDocumentation;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\DocumentationRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryDocumentation extends ABaseRepository implements DocumentationRepository
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
        return new ModelDocumentation();
    }
}