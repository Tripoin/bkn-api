<?php
/**
 * Created by PhpStorm.
 * User: fadhilprm
 * Date: 2/1/17
 * Time: 10:12 PM
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelCurriculum extends ModelAuditTrails
{
    protected $table = IApplicationConstant::CURRICULUM_TABLE_NAME;
    protected $fillable = array
    (
        IApplicationConstant::CURRICULUM_SUBJECT_ID,
        IApplicationConstant::CURRICULUM_MATERIAL_SUBJECT_ID
    );
}