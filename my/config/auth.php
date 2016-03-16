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
//local
            'clientId' => '5148975',
            'clientSecret' => 'iWTKQGXioPPWZAdNJO3S',
            /***********************************************/
//Hosting
	   //'clientId' => '5130699',
	   //'clientSecret' => '4B25v7qHSl0NODAekOuh',
        ],
        
        'twitter' => [
				// register your app here: https://dev.twitter.com/apps/new
				'class' => 'nodge\eauth\services\TwitterOAuth1Service',
				'key' => 'yOtlY0kIoQhaHqRkqNx1W8YvY',
				'secret' => 'DEzOuFkZEttpnPennSRwXMEpVSQGWxGwdoFTICYaNT2kPkN5GF',
			],
        
        'instagram' => [
			// register your app here: https://instagram.com/developer/register/
			'class' => 'nodge\eauth\services\InstagramOAuth2Service',
			'clientId' => '35f6c3b7b2cd448e89be548161532a89',
			'clientSecret' => '61692a3cbade4c0ba54fad102ccf3a24',
		],

        
        'yandex' => [
            // register your app here: https://oauth.yandex.ru/client/my
            'class' => 'nodge\eauth\services\YandexOAuth2Service',
            'clientId' => '0433bf3d23d34fadb5d999de8b50417d',
            'clientSecret' => 'a21e0477a469469a80e4154bbf4d9ec0',
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
            'clientId' => '821420806018-j5f54ifrt3kjp4gimvct7bkqvouu61op.apps.googleusercontent.com',
            'clientSecret' => 'Ta_A-4XSSNFGgplM0gb0KAQh',
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