<?php

namespace App\Providers;

class HttpMiddlewareServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->getContainer()->set('middleware', fn () => [
            'global' => config('middleware.middleware'),
            'api' => config('middleware.middlewareGroups.api'),
            'web' => config('middleware.middlewareGroups.web')
        ]);
    }
    public function boot()
    {
        //
    }
}
