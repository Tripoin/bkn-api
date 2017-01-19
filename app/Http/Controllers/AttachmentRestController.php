<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers;


use App\Http\Controllers\BaseRest\ARestController;
use App\Models\ModelAttachment;
use App\Repository\Impl\Attachment\AttachmentRepository;

class AttachmentRestController extends ARestController
{

    /**
     * @param AttachmentRepository $attachmentRepository
     */
    public function __construct(AttachmentRepository $attachmentRepository)
    {
        $this->repository = $attachmentRepository;
        parent::__construct();
    }

    public function getModel()
    {
        return new ModelAttachment();
    }
}