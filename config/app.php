<?php

// register all service providers
return [
    'appname' => 'slimstarter',
    'providers' => [
        \App\Providers\EnvironmentVariablesServiceProvider::class,
        \App\Providers\DatabaseServiceProvider::class,
        \App\Providers\BladeServiceProvider::class,
        \App\Providers\HttpMiddlewareServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\ErrorMiddlewareServiceProvider::class,
    ]
];
