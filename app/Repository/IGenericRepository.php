<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 5:59 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Repository;

/**
 * Generic Repository for Inquiry and Transaction
 *
 * Interface IGenericRepository
 * @package App\Repository
 */
interface IGenericRepository extends
    IInquiryRepository,
    ITransactionRepository,
    IReportRepository
{
}