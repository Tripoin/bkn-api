<?php
/**
 * Created by PhpStorm.
 * User: Dayat
 * Date: 15/01/2017
 * Time: 0:27
 */

namespace App\ConstantValue;


interface IModelContactConstant
{

    const CONTACT_MODEL_NAME        = 'contact';
    const CONTACT_TABLE_NAME        = 'mst_contact';

    const EMAIL1                    = 'email_1';
    const EMAIL2                    = 'email_2';
    const PHONE_NUMBER1             = 'phone_number_1';
    const PHONE_NUMBER2             = 'phone_number_2';
    const FAX                       = 'fax';

    const CONTACT_MESSAGE_TABLE_NAME    = 'mst_contact_message';
    const CONTACT_MESSAGE_MODEL_NAME    = 'contact_message';
    const CONTACT_MESSAGE_GUEST_NAME    = 'contact_message_guest_name';
    const CONTACT_MESSAGE_GUEST_EMAIL   = 'contact_message_guest_email';
    const CONTACT_MESSAGE_SUBJECT       = 'contact_message_subject';
    const CONTACT_MESSAGE_CONTENT       = 'contact_message_content';
}