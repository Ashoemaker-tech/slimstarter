<?php

namespace App\Providers;

use Tracy\Debugger;

class ErrorMiddlewareServiceProvider extends ServiceProvider
{
    public function register()
    {
        // enable slims error middleware passing app config for dev or prod mode
        $this->app->addErrorMiddleware(
            config('error.error_details.displayErrorDetails'),
            config('error.error_details.logErrors'),
            config('error.error_details.logErrorDetails'),
        );

        Debugger::enable(Debugger::Detect, storage_path('logs'));
        Debugger::$dumpTheme = 'dark';
    }

    public function boot()
    {
        //
    }
}
