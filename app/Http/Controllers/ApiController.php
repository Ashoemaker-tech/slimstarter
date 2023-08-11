<?php

namespace App\Http\Controllers;

use App\Models\User;

class ApiController
{
    public function index($response, User $user)
    {
        $user = $user::find(1);

        $response->getBody()->write(json_encode($user, JSON_PRETTY_PRINT));

        return $response;
    }
}
