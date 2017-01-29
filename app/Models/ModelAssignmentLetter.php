<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 4:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelAssignmentLetter extends ModelAuditTrails
{
    protected $table = IApplicationConstant::ASSIGNMENT_LETTER_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::ASSIGNMENT_LETTER_COL_LETTER_TITLE,
        IApplicationConstant::ASSIGNMENT_LETTER_COL_LETTER_BODY,
        IApplicationConstant::ASSIGNMENT_LETTER_COL_SIGNATURE,
        IApplicationConstant::ASSIGNMENT_LETTER_COL_LETTER_FOOTER
    );
}