<?php

namespace App\Http;

use Boot\Foundation\HttpKernel as Kernel;

class HttpKernel extends Kernel
{
    /**
     * Global Middleware
     *
     * @var array
     */
    public array $middleware = [
        Middleware\ExampleAfterMiddleware::class,
        Middleware\ExampleBeforeMiddleware::class
    ];

    /**
     * Route Middleware Groups
     *
     * @var array
     */
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];
}
