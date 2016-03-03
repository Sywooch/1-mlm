<?php
$params = require(__DIR__ . '/params.php');
$auth   = require(__DIR__ . '/auth.php');
$modules   = require(__DIR__ . '/modules.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
	'language' => 'en', // Set the language here
    'bootstrap' => ['log'],
    'modules' => $modules,
    'components' => [
        'eauth' => $auth,
        'i18n' => [
            'translations' => [
                'eauth' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@eauth/messages',
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl'   => true,
            'showScriptName'    => false,
            'suffix'            => '.php'
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'gdhjd1234567iuhgfhjkfhgcv',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'email-smtp.eu-west-1.amazonaws.com',
                'username' => 'AKIAJZTDP7R756C3REOA',
                'password' => 'ApY6cqBgaT1jVZyoRzvbxiyAV1YcGqQM/Tf77/LjnqmQ',
                'port' => '587',
                'encryption' => 'tls',
            ],

            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            //'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
