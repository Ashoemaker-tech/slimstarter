<?php


return [
    'middleware' => [
        // \App\Http\Middleware\ExampleBeforeMiddleware::class,
        // \App\Http\Middleware\ExampleAfterMiddleware::class
    ],
    'middlewareGroups' => [
        'api' => [
            \App\Http\Middleware\CsrfOverrideMiddleware::class
        ],
        'web' => [
            \App\Http\Middleware\RouteContextMiddleware::class
        ]
    ]
];
