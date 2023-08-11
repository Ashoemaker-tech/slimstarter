<?php

namespace App\Providers;

use Illuminate\Database\Capsule\Manager;

class DatabaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $options = data_get(config('database.connections'), config('database.default'));

        $capsule = new Manager();
        $capsule->addConnection($options);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        $this->app->getContainer()->set(Manager::class, fn () => $capsule);
    }

    public function boot()
    {
        //
    }
}
