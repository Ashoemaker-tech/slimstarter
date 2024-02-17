<?php

return [
    'default' => 'sqlite',

    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'url' => getenv('DATABASE_URL'),
            'database' => getenv('DB_NAME',),
            'prefix' => '',
            'foreign_key_constraints' => getenv('DB_FOREIGN_KEYS'),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => getenv('DATABASE_URL'),
            'host' => getenv('DB_HOST'),
            'port' => getenv('DB_PORT'),
            'database' => getenv('DB_NAME'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'unix_socket' => getenv('DB_SOCKET'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => getenv('MYSQL_ATTR_SSL_CA'),
            ]) : []
        ]
    ]
];
