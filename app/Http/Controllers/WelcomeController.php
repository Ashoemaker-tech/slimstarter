<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\View;

class WelcomeController
{
    public function index(View $view, User $user)
    {
        $users = User::get();
        return $view('index', compact('users'));
    }

    public function show(View $view, $name, $id)
    {
        return $view('user.show', compact('name', 'id'));
    }
}
