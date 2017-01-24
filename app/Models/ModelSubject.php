<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 18/01/2017
 * Time: 1:00
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelSubject extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_SUBJECT_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::BUDGET_TYPE_ID,
        IApplicationConstant::SUBJECT_AMOUNT,
        IApplicationConstant::SUBJECT_LOCATION,
        IApplicationConstant::SUBJECT_NECESSARY_DESC,
        IApplicationConstant::SUBJECT_PARENT_ID,

    );
}