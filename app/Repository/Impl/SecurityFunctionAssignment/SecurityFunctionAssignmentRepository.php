<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 11:07 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\SecurityFunctionAssignment;


use App\Repository\IGenericRepository;

interface SecurityFunctionAssignmentRepository extends IGenericRepository
{
    public function selectFAFromGroup($p_Group);

    public function selectAssignmentFromFunctionId($p_ID);
}