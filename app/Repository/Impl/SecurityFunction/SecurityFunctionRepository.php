<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 11:07 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository\Impl\SecurityFunction;


use App\Repository\IGenericRepository;

interface SecurityFunctionRepository extends IGenericRepository
{
    public function findAllFromSFId($p_ID);

    public function selectParentIdFromId($p_ID);
}