<?php

return [

    /*
    |---------------------------------------------------------------------
    | PALMco Enrollment Endpoint
    |---------------------------------------------------------------------
    */
    'enrollment_endpoint' => env('PALMCO_BACKEND_ENROLLMENT_ENDPOINT', ''),

    // Do not auto-export enrollments with the following email addresses (devops)
    'test_mode_emails' => [
        'jcharlesworth@gmail.com',
        'daveanton@shaw.ca',
        'abashe@palmcoenergy.com',
        'abashe@columbiautilities.com',
        'daveanton5@hotmail.com',

    ],

    'notification_bcc_address' => 'notifications@palmcoenergy.com',

    /*
    |---------------------------------------------------------------------
    | PALMco Enrollment Endpoint API Key
    |---------------------------------------------------------------------
    */
    'enrollment_endpoint_enabled' => env('PALMCO_ENROLLMENT_EXPORT_ENABLED', false),
    'enrollment_endpoint_api_key' => env('PALMCO_BACKEND_API_KEY', ''),

    /*
    |---------------------------------------------------------------------
    | Refer-a-friend program is enabled
    |
    | If enabled, every new enrollment will generate a new referral code and
    | a followup email with code will be sent specified minutes after
    | confirmation email.
    |---------------------------------------------------------------------
    */
    'raf_enabled' => env('PALMCO_RAF_ENABLED', false),
    'raf_test_mode' => env('PALMCO_RAF_TEST_MODE', true),
    'raf_email_delay_mins' => env('PALMCO_RAF_EMAIL_DELAY_MINS', 60),
    'raf_page_url' => 'https://palmcoenergy.com/refer-a-friend/',

    /*
    |---------------------------------------------------------------------
    | Customer survey results
    |
    |---------------------------------------------------------------------
    */
    'survey_followup_enabled' => env('PALMCO_SURVEY_FOLLOWUP_ENABLED', false),
    'survey_followup_delay_mins' => env('PALMCO_SURVEY_FOLLOWUP_DELAY_MINS', 0),

    'survey_result_export_list' => [
        [
            'name' => 'Joseph Accorso',
            'email' => 'jaccorso@columbiautilities.com'
        ],
        [
            'name' => 'Dave Anton',
            'email' => 'daveanton@shaw.ca'
        ],
    ],

    /*
  |---------------------------------------------------------------------
  | Znalytics API config
  |
  |---------------------------------------------------------------------
    */
    'znalytics_api_endpoint' => env('ZNALYTICS_API_ENDPOINT', ''),
    'znalytics_api_key' => env('ZNALYTICS_API_KEY', ''),

];
