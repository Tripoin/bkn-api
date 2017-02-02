<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\UserAssignment;


use App\Repository\IGenericRepository;

interface UserAssignmentRepository extends IGenericRepository
{

    public function makeAssignment($dataAssignment);

}