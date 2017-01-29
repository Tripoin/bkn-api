<?php
/**
 * @project pip-rest.
 * @since 8/23/2016 4:06 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelChecklistUsage extends ModelAuditTrails
{
    protected $table = IApplicationConstant::CHECKLIST_USAGE_TABLE_NAME;

    protected $fillable = array
    (
        IApplicationConstant::ID,
        IApplicationConstant::CODE,
        IApplicationConstant::NAME,
        IApplicationConstant::DESCRIPTION,
        IApplicationConstant::STATUS,
        IApplicationConstant::CREATED_BY,
        IApplicationConstant::CREATED_ON,
        IApplicationConstant::MODIFIED_BY,
        IApplicationConstant::CHECKLIST_USAGE_BOOKING_ID,
        IApplicationConstant::CHECKLIST_USAGE_IS_LOSS,
        IApplicationConstant::CHECKLIST_USAGE_JSON_CHECKLIST,
        IApplicationConstant::CHECKLIST_USAGE_USER_MAIN
    );

}