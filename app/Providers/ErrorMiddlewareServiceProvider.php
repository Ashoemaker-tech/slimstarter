<?php

namespace App\Providers;

use Throwable;
use Whoops\Run;
use Monolog\Level;
use Monolog\Logger;
use Slim\Psr7\Request;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
use Whoops\Handler\PrettyPageHandler;

class ErrorMiddlewareServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Setup Monolog
        $logger = new Logger(config('app.appname'));
        $fileHandler = new StreamHandler(storage_path('logs/app.log'), Level::Debug);
        $logger->pushHandler($fileHandler);

        // Instantiate and configure Whoops for pretty error pages
        $whoops = new Run;
        $whoops->pushHandler(new PrettyPageHandler);
        $whoops->register();

        // enable slims error middleware passing app config for dev or prod mode
        $errorMiddleware = $this->app->addErrorMiddleware(
            config('error.error_details.displayErrorDetails'),
            config('error.error_details.logErrors'),
            config('error.error_details.logErrorDetails'),
        );
        // create a error handler and log errors to the storage/logs file
        $errorMiddleware->setErrorHandler(
            Slim\Exception\HttpNotFoundException::class,
            function (Request $request, Throwable $exception) use ($logger) {
                $logger->error($exception->getMessage());
                // You can further customize how you want to respond. E.g., return a custom 404 response
            }
        );
        // set the error handler as the default
        $errorMiddleware->setDefaultErrorHandler(
            function (Request $request, Throwable $exception) use ($logger) {
                $logger->error($exception->getMessage());

                $response = new \Slim\Psr7\Response();
                // Use whoops in debug mode
                if (config('error.error_details.displayErrorDetails')) {
                    throw $exception; // Let Whoops handle it during development.
                } else {
                    // Return generic response in production
                    // TODO show a blade view file with the corresponding error code passed to the view
                    $response->getBody()->write('An error occurred. Please try again later.');
                    return $response->withStatus(500);
                }
            }
        );
    }

    public function boot()
    {
        //
    }
}
