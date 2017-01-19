<?php
/**
 * @project bkn-api
 * @since 30/12/2015 - 8:00 PM
 * @author <a href ="mailto:fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\Attachment;


use App\Models\ModelAnswerCategory;
use App\Models\ModelAttachment;
use App\Repository\Impl\ABaseRepository;
use App\Repository\Impl\SecurityUser\UserRepository;

class EloquentRepositoryAttachment extends ABaseRepository implements AttachmentRepository
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
        return new ModelAttachment();
    }




}