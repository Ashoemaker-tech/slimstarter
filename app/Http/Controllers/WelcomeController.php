<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\View;

class WelcomeController
{
    public function index(View $view, User $user)
    {
        $user = $user->find(1);
        return $view('index', compact('user'));
    }

    public function show($response, $name)
    {

        $response->getBody()->write($name);

        return $response;
    }
}
