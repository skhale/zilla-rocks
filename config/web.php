<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

return [
    'id' => 'zilla-rocks',
    'name' => 'Zilla Rocks',
    'basePath' => dirname(__DIR__),
    'homeUrl' => 'http://zilla.rocks',
    'extensions' => require __DIR__ . '/../vendor/yiisoft/extensions.php',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'zilla-rocks',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
            ]
        ],
        'view' => [
            'theme' => [
                'pathMap' => ['@app/views' => '@app/themes/basic'],
                'baseUrl' => '@web/themes/basic'
            ]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
        'db' => $db,
    ],
    'modules' => [
    ],
    'params' => $params,
];