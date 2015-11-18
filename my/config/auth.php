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
            'clientId' => '1657698847844895',
            'clientSecret' => '80e572561ddb517da2bff30e53f9f017',
        ],

        'vkontakte' => [
            // register your app here: https://vk.com/editapp?act=create&site=1
            'class' => 'nodge\eauth\services\VKontakteOAuth2Service',
//Pavel
            //'clientId' => '5129822',
            //'clientSecret' => 'IoCs27vO0tfd7USoTbK4',
//Vitaliy
            'clientId' => '5148975',
            'clientSecret' => 'iWTKQGXioPPWZAdNJO3S',
            /***********************************************/
//Hosting
           // 'clientId' => '5130699',
           // 'clientSecret' => '4B25v7qHSl0NODAekOuh',
            /***********************************************/

        ],
        'yandex' => [
            // register your app here: https://oauth.yandex.ru/client/my
            'class' => 'nodge\eauth\services\YandexOAuth2Service',
            'clientId' => '0c6983e0587b424d899b45d06ad97fb9',
            'clientSecret' => '430c4adcd6c648b0b5f2bd533e9dcea4',
            'title' => 'Yandex',
        ],
        'mailru' => [
            // register your app here: http://api.mail.ru/sites/my/add
            'class' => 'nodge\eauth\services\MailruOAuth2Service',
            'clientId' => '739194',
            'clientSecret' => 'cecccd2845f644954fa76394c2982e15',
        ],
        'google' => [
            // register your app here: https://code.google.com/apis/console/
            'class' => 'nodge\eauth\services\GoogleOAuth2Service',
            'clientId' => 'glowing-run-111709',
            'clientSecret' => 'AIzaSyCCzNaYZQEM6j_WYHlfzr_KEpfFA6C1y24',
            'title' => 'Google',
        ],
        'linkedin_oauth2' => [
            // register your app here: https://www.linkedin.com/secure/developer
            'class' => 'nodge\eauth\services\LinkedinOAuth2Service',
            'clientId' => '7724a4sbrutauu',
            'clientSecret' => 'nxRkYB8vK6MxxvcL',
            'title' => 'LinkedIn (OAuth2)',
        ],
    ],
];