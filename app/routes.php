<?php

use Slim\App;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

return function (App $app) {
    // Define app routes
    $app->get('/', function (RequestInterface $request, ResponseInterface $response) {
        $response->getBody()->write('Hello World');
        return $response;
    });
};
