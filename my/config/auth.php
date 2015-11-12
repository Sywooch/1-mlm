<?php
return [
    'class' => 'nodge\eauth\EAuth',
    'popup' => true, // Use the popup window instead of redirecting.
    'cache' => false, // Cache component name or false to disable cache. Defaults to 'cache' on production environments.
    'cacheExpire' => 0, // Cache lifetime. Defaults to 0 - means unlimited.
    'httpClient' => [
        // uncomment this to use streams in safe_mode
        //'useStreamsFallback' => true,
    ],
    'services' => [ // You can change the providers and their classes.

        'facebook' => [
            // register your app here: https://developers.facebook.com/apps/
            'class' => 'nodge\eauth\services\FacebookOAuth2Service',
            'clientId' => '...',
            'clientSecret' => '...',
        ],

        'vkontakte' => [
            // register your app here: https://vk.com/editapp?act=create&site=1
            'class' => 'nodge\eauth\services\VKontakteOAuth2Service',
            'clientId' => '5129822',
            'clientSecret' => 'IoCs27vO0tfd7USoTbK4',
            //'clientId' => '5143320',
            //'clientSecret' => 'O7vsoqQCG5q8fy6QHjUJ',

        ],
        'google' => [
            // register your app here: https://code.google.com/apis/console/
            'class' => 'nodge\eauth\services\GoogleOAuth2Service',
            'clientId' => '...',
            'clientSecret' => '...',
            'title' => 'Google',
        ],
        'linkedin_oauth2' => [
            // register your app here: https://www.linkedin.com/secure/developer
            'class' => 'nodge\eauth\services\LinkedinOAuth2Service',
            'clientId' => '...',
            'clientSecret' => '...',
            'title' => 'LinkedIn (OAuth2)',
        ],
    ],
];