<?php

declare(strict_types=1);

use Slim\App;
use App\Http\Middleware\ExampleAfterMiddleware;
use App\Http\Middleware\ExampleBeforeMiddleware;

return function (App $app) {
    $app->addErrorMiddleware(true, true, true);
    $app->add(ExampleBeforeMiddleware::class);
    $app->add(ExampleAfterMiddleware::class);
};
