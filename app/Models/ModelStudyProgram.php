<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 1/29/17
 * Time: 5:16 PM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelStudyProgram extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_STUDY_PROGRAM_TABLE;
}