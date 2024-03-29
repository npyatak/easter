<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'language' => 'ru-RU',
    'sourceLanguage' => 'en-US',
    'name' => 'Готовимся к Пасхе с Dr. Oetker',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'homeUrl' => '/',
    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => ['/js/jquery-3.3.1.min.js'],
                ],
            ]
        ],
        'request' => [
            'baseUrl' => '/',
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => '2323457409',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'baseUrl' => '/',
            'rules' => [                
                '/' => 'site/index',
                'recipies/<alias>' => 'site/recipe',
                '<action:\w+>/<id:\d+>' => 'site/<action>',
                '<action:\w+>' => 'site/<action>',
            ],
        ],
    ],
    'params' => $params,
];
