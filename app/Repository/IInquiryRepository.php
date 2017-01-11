<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 10:54 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository;

use App\Dto\Entity\DTOPaging;

/**
 * Used for Inquiry process
 *
 * Interface IInquiryRepository
 * @package App\Repository
 */
interface IInquiryRepository
{

    public function findById($p_ID);

    public function findByCode($p_CODE);

    public function findByName($p_NAME);

    public function all();

    public function allSortedAscByParticularColumn($p_ColumnReference);

    public function allSortedDescByParticularColumn($p_ColumnReference);

    public function advancedPagination(DTOPaging $dtoPaging);

    public function hardCorePagination($p_DATA);

    public function simplePagination($p_PageLimit);

    public function selectLOV();

    public function getPhysicalColumnNames();
}