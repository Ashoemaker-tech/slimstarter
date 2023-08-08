<?php

use Slim\App;
use Slim\Views\TwigMiddleware;

return function (App $app) {
    $setting = $app->getContainer()->get('settings');

    $app->addErrorMiddleware(
        $setting['displayErrorDetails'],
        $setting['logErrors'],
        $setting['logErrorDetails']
    );
    $twig = $app->getContainer()->get('view');
    $app->add(TwigMiddleware::create($app, $twig));
};
