<?php

require_once __DIR__ . '/../vendor/autoload.php';
$app = require_once base_path('bootstrap/app.php');

return [
    'paths' => [
        'migrations' => database_path('migrations'),
        'seeds' => database_path('seeders')
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'slim',
        'slim' => [
            'adapter' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'name' => env('DB_DATABASE', 'laraslim'),
            'user' => env('DB_USER', 'root'),
            'pass' => env('DB_PASSWORD', ''),
            'port' => env('DB_PORT', '3306'),
            'charset' => 'utf8mb4'
        ]
    ]

];
