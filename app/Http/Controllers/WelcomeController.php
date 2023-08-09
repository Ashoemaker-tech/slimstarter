<?php

namespace App\Http\Controllers;

use App\Support\View;

class WelcomeController
{
    public function index(View $view)
    {
        return $view('index');
    }

    public function show($response, $name)
    {

        $response->getBody()->write($name);

        return $response;
    }
}
