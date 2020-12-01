<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Spam Detection Configurations.
    |--------------------------------------------------------------------------
    |
    | - Here, you maybe change the configuration for you spam detector something
    |   like change the random input name to detect it is this filed is having a value while it's not visible to users in the form
    |   which means something wrong here.
    |
    | - Change also the time field name that used to get the time that user taken to submit a form.
    |
    | - and of course you maybe enabled or disabled your detection functionality.
    |
    | - Finally you may be also, define the min value in seconds that you are expected to fill out the forms and submit
    |   for normal user do. and anyone has been submit his form less than this value, again that mean something is weird here.
    */

    'enabled'         => env('SPAM_DETECTOR_ENABLED',true),

    'filed_name'      => 'my_name',

    'time_filed_name' => 'my_time',

    'minimum_time'    => 3, // In seconds.
];
