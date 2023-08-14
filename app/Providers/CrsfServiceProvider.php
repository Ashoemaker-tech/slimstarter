<?php

namespace App\Providers;

use Slim\Csrf\Guard;
use Slim\Psr7\Factory\ResponseFactory;

class CrsfServiceProvider extends ServiceProvider
{
    public function register()
    {
        //;
    }

    public function boot()
    {
        $this->app->getContainer()->set('csrf', fn (ResponseFactory $factory) => new Guard($factory));
    }
}
