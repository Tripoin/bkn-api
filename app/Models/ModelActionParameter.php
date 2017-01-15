<?php
/**
 * @project bkn-api.
 * @since 1/15/2017 6:43 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace app\Models;


use App\ConstantValue\IApplicationConstant;

class ModelActionParameter extends ModelAuditTrails
{
    protected $table = IApplicationConstant::ACTION_PARAMETER_TABLE_NAME;
}