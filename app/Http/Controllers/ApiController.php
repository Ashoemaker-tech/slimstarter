<?php

namespace App\Http\Controllers;

use App\Models\User;
use Slim\Http\Response;

class ApiController
{
    public function index(Response $response, User $user)
    {
        // $user = $user::find(1);
        $user = ['name' => 'Andrew'];
        return $response->withJson($user, 200, JSON_PRETTY_PRINT);

        // return $response->withRedirect('/', 302);
    }
}
