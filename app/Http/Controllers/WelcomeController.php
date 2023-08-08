<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class WelcomeController
{
    public function index(Request $request, Response $response)
    {
        return view($request, $response, 'index.html');
    }

    public function show(Request $request, Response $response, $parameters)
    {
        $name = $parameters['name'];
        $response->getBody()->write($name);

        return $response;
    }
}
