<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 2:06
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelOrganizerAssignment extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_ORGANIZER_ASSIGNMENT_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::ORG_ASSIGN_ORGANIZER_ID,
        IApplicationConstant::IS_PASSED,
        IApplicationConstant::ORG_ASSIGN_EXPIRED,
        IApplicationConstant::ASSIGNMENT_LETTER_ID
    );
}