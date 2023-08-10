<?php

declare(strict_types=1);

use App\Http\Middleware\ExampleAfterMiddleware;
use App\Http\Middleware\ExampleBeforeMiddleware;
use Psr\Http\Message\ServerRequestInterface as RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

$routes = require __DIR__ . '/../app/routes.php';
$routes($app);
// Run the app
$app->run();
