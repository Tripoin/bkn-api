<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 16:14
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelQuestionnaire extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_QUESTIONNAIRE_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::QUESTIONNAIRE_LVL_AKD_ID,
        IApplicationConstant::QUESTIONNAIRE_START,
        IApplicationConstant::QUESTIONNAIRE_END,
        IApplicationConstant::QUESTIONNAIRE_YEAR,
        IApplicationConstant::QUESTIONNAIRE_JSON_REVIEW
    );
}