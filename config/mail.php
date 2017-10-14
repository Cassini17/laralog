<?php

return [

    'driver' => env('MAIL_DRIVER', 'mailgun'),

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    'port' => env('MAIL_PORT', 587),

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'postmaster@sandbox8038ae02d0c2438f90c5cc6a79948dc0.mailgun.org'),
        'name' => env('MAIL_FROM_NAME', 'Fred Hou'),
    ],

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

//    'username' => env('postmaster@sandbox8038ae02d0c2438f90c5cc6a79948dc0.mailgun.org'),

    'username' => 'postmaster@sandbox8038ae02d0c2438f90c5cc6a79948dc0.mailgun.org',

    'password' => '014c5b78555438b48e48f0f4e81d7d35',

    'sendmail' => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            //resource_path('views/vendor/mail'),
            resource_path('views/email'),
        ],
    ],

];
