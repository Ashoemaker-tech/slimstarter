<?php

namespace App\Providers;

use App\Support\RouteGroup;
use App\Support\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        Route::setup($this->app);

        $this->app->getContainer()->set(RouteGroup::class, fn () => new RouteGroup($this->app));
    }

    public function boot()
    {
        $this->apiRouteGroup()->register();
        $this->webRouteGroup()->register();
    }

    public function apiRouteGroup(): RouteGroup
    {
        $get = routes_path('api.php');
        $add = $this->app->getContainer()->get('middleware');
        $api = $this->app->getContainer()->get(RouteGroup::class);

        return $api->routes($get)->prefix('/api')->middleware([
            ...$add['api'],
            ...$add['global']
        ]);
    }

    public function webRouteGroup(): RouteGroup
    {
        $get = routes_path('web.php');
        $add = $this->app->getContainer()->get('middleware');
        $web = $this->app->getContainer()->get(RouteGroup::class);

        return $web->routes($get)->prefix('')->middleware([
            ...$add['web'],
            ...$add['global']
        ]);
    }
}
