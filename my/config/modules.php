<?php
return [
    'gridview' =>  [
        'class' => '\kartik\grid\Module'
    ],
    'social' => [
        // the module class
        'class' => 'kartik\social\Module',

        // the global settings for the Disqus widget
        'disqus' => [
            'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // default settings
        ],

        // the global settings for the Facebook plugins widget
        'facebook' => [
            'appId' => '1657698847844895',
            'secret' => '80e572561ddb517da2bff30e53f9f017',
        ],

        // the global settings for the Google+ Plugins widget
        'google' => [
            'clientId' => 'GOOGLE_API_CLIENT_ID',
            'pageId' => 'GOOGLE_PLUS_PAGE_ID',
            'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
        ],

        // the global settings for the Google Analytics plugin widget
        'googleAnalytics' => [
            'id' => 'TRACKING_ID',
            'domain' => 'TRACKING_DOMAIN',
        ],

        // the global settings for the Twitter plugin widget
        'twitter' => [
            'screenName' => 'TWITTER_SCREEN_NAME'
        ],

        // the global settings for the GitHub plugin widget
        'github' => [
            'settings' => ['user' => 'GITHUB_USER', 'repo' => 'GITHUB_REPO']
        ],
    ]
];


