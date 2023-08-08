<?php

use Slim\Views\Twig;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Global helper functions
 */
if (!function_exists('view')) {
    function view(Request $request, Response $response, $template, $data = [])
    {
        $view = Twig::fromRequest($request);
        return $view->render($response, $template, $data);
    }
}
