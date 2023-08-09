<?php

namespace Boot\Foundation;

use Boot\Foundation\Bootstrappers\Bootstrapper;

class HttpKernel extends Kernel
{
    /**
     * Global Middleware
     *
     * @var array
     */
    public array $middleware = [];

    /**
     * Route Middleware Groups
     *
     * @var array
     */
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];

    public array $bootstrap = [
        Bootstrappers\LoadEnvironmentVariables::class,
        Bootstrappers\LoadDebuggingPage::class,
        Bootstrappers\LoadHttpMiddleware::class,
        Bootstrappers\LoadServiceProviders::class
    ];
}
