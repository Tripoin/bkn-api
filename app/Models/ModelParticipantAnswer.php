<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:10
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelParticipantAnswer extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_PARTICIPANT_ANSWER;

    protected $fillable = array
    (
        IApplicationConstant::PARTICIPANT_QUESTION_ID,
        IApplicationConstant::PARTICIPANT_CALC_QUESTIONNAIRE,
        IApplicationConstant::PARTICIPANT_JSON_ANSWER
    );
}