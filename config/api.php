<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */
    'server_1' => [
        'post' => [
            'GetToken' => 'http://nailsmasterstest.com.xsph.ru/api/loginadmin',
            'ApiLogout' => 'http://nailsmasterstest.com.xsph.ru/api/logout'
        ],
        'get' => [
            'MasterIndex' => 'http://nailsmasterstest.com.xsph.ru/api/masterindex'
        ]
    ]

];
