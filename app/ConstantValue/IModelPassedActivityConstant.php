<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 22:08
 */

namespace App\ConstantValue;


interface IModelPassedActivityConstant
{
    /**
     * mst_passed_activity
     */
    const MST_PASSED_ACTIVITY           = 'mst_passed_activity';
    const PASSED_ACT_PARTICIPANT_ASSIGN = 'participant_assignment_id';
    const PASSED_ACT_SUBJECT_NAME                  = 'subject_name';
    const PASSED_ACT_SUBJECT_CATEGORY_NAME         = 'subject_category_name';
    const PASSED_ACT_SUBJECT_TYPE_NAME             = 'subject_type_name';
    const PASSED_ACT_GENERATION                    = 'generation';
    const PASSED_ACT_LOCATION                      = 'location';
    const PASSED_ACT_START_ACTIVITY                = 'start_activity';
    const PASSED_ACT_END_ACTIVITY                  = 'end_activity';
    const PASSED_ACT_YEAR_ACTIVITY                 = 'year_activity';
    const PASSED_ACT_CERTIFICATE_ID                = 'certificate_id';

    /**
     * mst_passed_activity_details
     */
    const MST_PASSED_ACTIVITY_DETAILS               = 'mst_passed_activity_details';
    const PASSED_ACTIVITY_ID                        = 'passed_activity_id';
    const PASSED_ACT_TRAINER_NAME                   = 'trainer_name';
    const PASSED_ACT_MTR_SUBJECT_NAME               = 'material_subject_name';
    const PASSED_ACT_DURATION                       = 'duration';
    const PASSED_ACT_UNIT_ID                        = 'unit_id';
}