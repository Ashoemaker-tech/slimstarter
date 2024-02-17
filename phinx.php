<?php

require_once './vendor/autoload.php';
$app = require_once './bootstrap/app.php';

return
    [
        'paths' => [
            'migrations' => database_path('migrations'),
            'seeds' => database_path('seeders')
        ],
        'environments' => [
            'default_migration_table' => 'phinxlog',
            'default_getenvironment' => getenv('APP_getenv'),
            'production' => [
                'adapter' => getenv('DB_CONNECTION'),
                'host' => getenv('DB_HOST'),
                'name' => getenv('DB_NAME'),
                'user' => getenv('DB_USERNAME'),
                'pass' => getenv('DB_PASSWORD'),
                'port' => getenv('DB_PORT'),
                'charset' => 'utf8',
            ],
            'development' => [
                'adapter' => getenv('DB_CONNECTION'),
                'host' => getenv('DB_HOST'),
                'name' => getenv('DB_NAME'),
                'user' => getenv('DB_USERNAME'),
                'pass' => getenv('DB_PASSWORD'),
                'port' => getenv('DB_PORT'),
                'charset' => 'utf8',
            ]
        ],
        'version_order' => 'creation'
    ];
