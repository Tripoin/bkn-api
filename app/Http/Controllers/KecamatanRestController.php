<?php

/**
 * @project pip-rest.
 * @since 8/18/2016 5:13 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;

use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelKecamatan;
use App\Repository\Impl\Kecamatan\KecamatanRepository;

class KecamatanRestController extends ARestController
{

    /**
     * @param KecamatanRepository $p_RepositoryKecamatan
     */
    public function __construct(KecamatanRepository $p_RepositoryKecamatan)
    {
        $this->repositoryKecamatan = $p_RepositoryKecamatan;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelKecamatan();
    }
}