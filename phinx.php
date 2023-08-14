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
            'default_environment' => env('APP_ENV', 'development'),
            'production' => [
                'adapter' => env('DB_CONNECTION', 'mysql'),
                'host' => env('DB_HOST', 'localhost'),
                'name' => env('DB_NAME', 'laraslim'),
                'user' => env('DB_USER', 'root'),
                'pass' => env('DB_PASSWORD', ''),
                'port' => env('DB_PORT', '3306'),
                'charset' => 'utf8',
            ],
            'development' => [
                'adapter' => env('DB_CONNECTION', 'mysql'),
                'host' => env('DB_HOST', 'localhost'),
                'name' => env('DB_NAME', 'laraslim'),
                'user' => env('DB_USER', 'root'),
                'pass' => env('DB_PASSWORD', ''),
                'port' => env('DB_PORT', '3306'),
                'charset' => 'utf8',
            ]
        ],
        'version_order' => 'creation'
    ];
