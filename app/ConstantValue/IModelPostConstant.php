<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 16/01/2017
 * Time: 22:34
 */

namespace App\ConstantValue;


interface IModelPostConstant
{

    /**
     * mst_post
     */
    const MST_POST_TABLE        = 'mst_post';
    const POST_TITLE            = 'post_title';
    const POST_SUBTITLE         = 'post_subtitle';
    const POST_CONTENT          = 'post_content';
    const POST_FEATURE          = 'post_feature';
    const POST_URL_VIDEO        = 'post_url_video';
    const POST_URL_IMAGE        = 'post_url_image';
    const POST_URL_THUMBNAIL    = 'post_url_thumbnail';
    const POST_COMMENT_ENABLE   = 'post_comment_enable';
    const POST_TYPE             = 'post_type';
    const POST_EXTRA_FLAG       = 'post_extra_flag';
    const POST_STATUS           = 'post_status';
    const POST_TEMPLATE         = 'post_template';
    const POST_META_TITLE       = 'meta_title';
    const POST_META_KEYWORD     = 'meta_keyword';
    const POST_READ_COUNT       = 'read_count';
    const POST_PUBLISH_ON       = 'publish_on';
    const POST_AUTHOR_ID        = 'author_id';

    /**
     * mst_post_language
     */
    const MST_POST_LANGUAGE_TABLE       = 'mst_post_language';
    const POST_LANGUAGE_POST_ID         = 'post_id';
    const POST_LANGUAGE_ID              = 'language_id';
}