<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelCertificate;
use app\Repository\Impl\Certificate\CertificateRepository;

class CertificateRestController extends ARestController
{

    /**
     * @param CertificateRepository $certificateRepository
     */
    public function __construct(CertificateRepository $certificateRepository)
    {
        $this->repository = $certificateRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelCertificate();
    }
}