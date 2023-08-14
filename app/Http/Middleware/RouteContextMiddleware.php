<?php

namespace App\Http\Middleware;

use App\Support\Redirect;
use App\Support\RequestInput;
use Slim\Routing\RouteContext;
use Psr\Http\Server\RequestHandlerInterface as Handle;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Psr7\Factory\ResponseFactory;

class RouteContextMiddleware
{
    public function __invoke(Request $request, Handle $handler)
    {
        $route = RouteContext::fromRequest($request)->getRoute();

        throw_when(empty($route), 'Route not found in request');

        app()->getContainer()->set(Redirect::class, fn (ResponseFactory $factory) => new Redirect($factory));
        $input = new RequestInput($request, $route);
        app()->getContainer()->set(RequestInput::class, $input);

        return $handler->handle($request);
    }
}
