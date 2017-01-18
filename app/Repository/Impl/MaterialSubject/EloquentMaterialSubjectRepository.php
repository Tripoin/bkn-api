<?php

/**
 * @project pip-api.
 * @since 9/8/2016 10:24 AM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\MaterialSubject;



use App\Models\ModelMaterialSubject;
use App\Repository\Impl\MaterialSubject\MaterialSubjectRepository;

class EloquentMaterialSubjectRepository implements MaterialSubjectRepository
{
    public function __construct(UserRepository $p_UserRepository)
    {
        parent::__construct($p_UserRepository);
    }

    public function  getModel()
    {
        return new ModelMaterialSubject();
    }
}