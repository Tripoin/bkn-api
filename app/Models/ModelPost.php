<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 10:54
 */

namespace App\Models;


use App\ConstantValue\IApplicationConstant;

class ModelPost extends ModelAuditTrails
{
    protected $table = IApplicationConstant::MST_POST_TABLE;

    protected $fillable = array
    (
        IApplicationConstant::POST_TITLE,
        IApplicationConstant::POST_SUBTITLE,
        IApplicationConstant::POST_CONTENT,
        IApplicationConstant::POST_FEATURE,
        IApplicationConstant::POST_URL_VIDEO,
        IApplicationConstant::POST_URL_IMAGE,
        IApplicationConstant::POST_URL_THUMBNAIL,
        IApplicationConstant::POST_COMMENT_ENABLE,
        IApplicationConstant::POST_TYPE,
        IApplicationConstant::POST_EXTRA_FLAG,
        IApplicationConstant::POST_STATUS,
        IApplicationConstant::POST_TEMPLATE,
        IApplicationConstant::POST_META_TITLE,
        IApplicationConstant::POST_META_KEYWORD,
        IApplicationConstant::POST_READ_COUNT,
        IApplicationConstant::POST_PUBLISH_ON,
        IApplicationConstant::POST_AUTHOR_ID
    );
}