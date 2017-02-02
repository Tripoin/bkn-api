<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Service\UserAssignment;


class UserAssignmentServiceImpl implements IUserAssignmentService
{

    public function makeAssignment($dataAssignment)
    {
        $this->repository->makeAssignment($dataAssignment);
    }
}