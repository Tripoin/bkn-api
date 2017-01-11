<?php

/**
 * @project pip-rest.
 * @since 8/23/2016 6:02 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\Kecamatan;

use App\ConstantValue\IApplicationConstant;
use App\Repository\Impl\ABaseRepository;

class EloquentRepositoryKabupaten extends ABaseRepository
{

    public function  getModel()
    {
        return new ModelKabupaten();
    }
}