<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 21:32
 */

namespace App\ConstantValue;


interface IModelOrganizerConstant
{
    /**
     * mst_organizer
     */
    const MST_ORGANIZER_TABLE_NAME   = 'mst_organizer';
    const USER_PROFILE_ID            = 'user_profile_id';
    const MST_ORGANIZER_NIP          = 'nip';
    const MST_ORGANIZER_NIK          = 'nik';

    /**
     * mst_organizer_assignment
     */
    const MST_ORGANIZER_ASSIGNMENT_TABLE_NAME   = 'mst_organizer_assignment';
    const ORG_ASSIGN_ORGANIZER_ID    = 'organizer_id';
    const IS_PASSED                  = 'is_passed';
    const ORG_ASSIGN_EXPIRED         = 'expired';
    const ASSIGNMENT_LETTER_ID       = 'assignment_letter_id';
}