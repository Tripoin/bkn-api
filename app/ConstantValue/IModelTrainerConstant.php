<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 17/01/2017
 * Time: 0:29
 */

namespace App\ConstantValue;


interface IModelTrainerConstant
{
    /**
     * mst_trainer
     */
    const MST_TRAINER_TABLE         = 'mst_trainer';
    const TRAINER_IS_EXTERNAL       = 'is_external';

    /**
     * mst_trainer_assignment
     */
    const MST_TRAINER_ASSIGNMENT_TABLE      = 'mst_trainer_assignment';
    const TRAINER_ID                        = 'trainer_id';
    const ACTIVITY_DETAILS_ID               = 'activity_details_id';
    const TRAINER_IS_PASSED                         = 'is_passed';
    const ASSIGN_EXPIRED                    = 'expired';
    const ASSIGN_LETTER_ID                  = 'assignment_letter_id';
}