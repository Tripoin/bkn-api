<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 16/01/2017
 * Time: 23:31
 */

namespace App\ConstantValue;


interface IModelSubjectConstant
{
    /**
     * mst_subject
     */
    const MST_SUBJECT_TABLE         = 'mst_subject';
    const BUDGET_TYPE_ID            = 'budget_type_id';
    const SUBJECT_AMOUNT            = 'subject_amount';
    const SUBJECT_LOCATION          = 'location';
    const SUBJECT_NECESSARY_DESC    = 'necessary_description';
    const SUBJECT_PARENT_ID         = 'parent_id';
    /**
     * mst_subject_category
     */
    const MST_SUBJECT_CATEGORY_TABLE    = 'mst_subject_category';
    const SUBJECT_TYPE_PARENT_ID    = 'subject_type_parent_id';
    const SUBJECT_CATEGORY_ID       = 'subject_category_id';

    /**
     * mst_subject_requirements
     */
    const MST_SUBJECT_REQUIREMENTS_TABLE    = 'mst_subject_requirements';

    /**
     * mst_subject_type
     */
    const MST_SUBJECT_TYPE_TABLE            = 'mst_subject_type';
}