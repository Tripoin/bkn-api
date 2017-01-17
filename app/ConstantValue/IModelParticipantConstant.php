<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 21:43
 */

namespace App\ConstantValue;


interface IModelParticipantConstant
{
    /**
     * mst_participant
     */
    const MST_PARTICIPANT       = 'mst_participant';
    const PARTICIPANT_USER_PROFILE_ID  = 'user_profile_id';
    const PARTICIPANT_NIP       = 'nip';
    const PARTICIPANT_NIK       = 'nik';
    const PARTICIPANT_JSON_OCCUPATION   = 'json_occupation';
    const PARTICIPANT_TYPE_ID       = 'participant_type_id';
    const PARTICIPANT_GOV_AGENCIES_ID   = 'government_agencies_id';
    const PARTICIPANT_IS_ALUMNUS    = 'is_alumnus';

    /**
     * mst_participant_answer
     */
    const MST_PARTICIPANT_ANSWER            = 'mst_participant_answer';
    const PARTICIPANT_QUESTION_ID           = 'question_id';
    const PARTICIPANT_CALC_QUESTIONNAIRE    = 'calc_questionnaire_id';
    const PARTICIPANT_JSON_ANSWER           = 'json_answer';

    /**
     * mst_participant_assignment
     */
    const MST_PARTICIPANT_ASSIGNMENT        = 'mst_participant_assignment';
    const PARTICIPANT_ID                    = 'participant_id';
    const PARTICIPANT_ACTV_ID               = 'activity_id';
    const PARTICIPANT_IS_PASSED             = 'is_passed';
    const PARTICIPANT_EXPIRED               = 'expired';

    /**
     * mst_participant_type
     */
    const MST_PARTICIPANT_TYPE              = 'mst_participant_type';
}