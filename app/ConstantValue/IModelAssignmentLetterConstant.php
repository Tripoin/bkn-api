<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\ConstantValue;


interface IModelAssignmentLetterConstant
{
    const ASSIGNMENT_LETTER_TABLE_NAME       = 'mst_assigment_letter';
    const ASSIGNMENT_LETTER_COL_LETTER_TITLE = 'letter_type';
    const ASSIGNMENT_LETTER_COL_LETTER_BODY = 'letter_body';
    const ASSIGNMENT_LETTER_COL_LETTER_FOOTER = 'letter_footer';
    const ASSIGNMENT_LETTER_COL_SIGNATURE = 'signature';
}