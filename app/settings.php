<?php

use Slim\Views\Twig;
use Psr\Container\ContainerInterface;

return function (ContainerInterface $container) {
    $container->set('settings', function () {
        return [
            'displayErrorDetails' => true,
            'logErrorDetails' => true,
            'logErrors' => true
        ];
    });

    $container->set('view', function () {
        return Twig::create(__DIR__ . '/../resources/views', ['cache' => false]);
    });
};
