<?php

namespace App\Http\Controllers;

use App\Support\Auth;
use App\Support\View;

class AccountController
{
    public function index(View $view)
    {
        $user = Auth::user();

        return $view('auth.index', compact('user'));
    }
}
