<?php

use Slim\App;
use App\Http\Controllers\WelcomeController;

return function (App $app) {
    $app->get('/', [WelcomeController::class, 'index']);
    $app->get('/{name}', [WelcomeController::class, 'show']);
};
