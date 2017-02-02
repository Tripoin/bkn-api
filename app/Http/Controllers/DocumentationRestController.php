<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:53 PM
 */

namespace App\Http\Controllers;


use App\Models\ModelDocumentation;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\Documentation\DocumentationRepository;

class DocumentationRestController extends ABaseRepository
{

    /**
     * @param DocumentationRepository $documentationRepository
     */
    public function __construct(DocumentationRepository $documentationRepository)
    {
        $this->repository = $documentationRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelDocumentation();
    }
}