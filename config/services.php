<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'instamojo' => [
      'api_key' => env('IM_API_KEY'),
      'auth_token' => env('IM_AUTH_TOKEN'),
      'salt_key' => env('IM_SALT_KEY'),
      'url' => env('IM_URL'),
    ],

    'testinstamojo' => [
      'api_key' => env('TEST_IM_API_KEY'),
      'auth_token' => env('TEST_IM_AUTH_TOKEN'),
      'salt_key' => env('TEST_IM_SALT_KEY'),
      'url' => env('TEST_IM_URL'),
    ]

];
