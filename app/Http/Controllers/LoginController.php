<?php

namespace App\Http\Controllers;

use App\Support\Auth;
use App\Support\View;
use App\Support\RequestInput;

class LoginController
{
    public function show(View $view)
    {
        return $view('auth.login');
    }

    public function store(RequestInput $input)
    {
        $validator = validate($input->all())->validateFields();

        if (!$validator->isValid()) {
            dd($validator->errors());
        }

        if (Auth::attempt($input->email, $input->password)) {
            return redirect('/account');
        }
        // return redirect('/account');
        dd('Unseccessful login attempt');
    }

    public function destroy()
    {
        Auth::logout();
        if (auth()) {
            dd('Something went wrong');
        }
        return redirect('/login');
    }
}
