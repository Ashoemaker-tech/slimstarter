<?php

use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;
use App\Providers\ServiceProvider;

// use slim bridge to create app container
$app = SlimAppFactory::create(new Container);

// pass app instance to the service providers
ServiceProvider::setup($app, config('app.providers'));

$_SERVER['app'] = &$app;
if (!function_exists('app')) {
    function app()
    {
        return $_SERVER['app'];
    }
}

$app->addRoutingMiddleware();
$app->add('csrf');
return $app;
