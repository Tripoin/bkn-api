<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 10:48 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository;

/**
 * Used for Transaction Process
 *
 * Interface ITransactionRepository
 * @package App\Repository
 */
interface ITransactionRepository
{
    public function insert($p_DATA);

    public function update($p_DATA);

    public function delete($p_ID);

    public function insertCollection($p_DATA);

    public function updateCollection($p_DATA);

    public function deleteCollection($p_IDs);
}