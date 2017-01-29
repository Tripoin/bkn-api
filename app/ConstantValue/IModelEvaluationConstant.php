<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 19/01/2017
 * Time: 19:51
 */

namespace App\ConstantValue;


interface IModelEvaluationConstant
{
    /**
     * mst_evaluation
     */
    const MST_EVALUATION_TABLE              = 'mst_evaluation';
    const EVALUATION_RATE_VALUE             = 'rate_value';

    /**
     * mst_evaluation_assess
     */
    const MST_EVALUATION_ASSESS_TABLE       = 'mst_evaluation_assess';
    const EVALUATION_CATEGORY_ID            = 'evaluation_category';

    /**
     * mst_evaluation_category
     */
    const MST_EVALUATION_CATEGORY_TABLE     = 'mst_evaluation_category';

    /**
     * mst_evaluation_details
     */
    const MST_EVALUATION_DETAILS_TABLE      = 'mst_evaluation_details';
    const EVALUATION_ID                     = 'evaluation_id';
    const EVALUATION_ASSESS_ID              = 'evaluation_assess_id';
    const EVALUATION_PARTICIPANT_TOTAL      = 'participant_total';
    const EVALUATION_TOTAL_VALUE            = 'total_value';
}