<?php


namespace App\Http\Controllers;

use App\Models\User;
use App\Support\Auth;
use App\Support\RequestInput;
use App\Support\View;

class RegisterController
{
    public function show(View $view)
    {
        return $view('auth.register');
    }

    public function store(RequestInput $input)
    {
        $validator = validate($input->all())
            ->validateFields()
            ->addRule('lengthMin', 'username', 5)
            ->validateEmail()
            ->validatePassword()
            ->validateConfirmPassword();

        if (!$validator->isValid()) {
            dd($validator->errors());
        }

        $input->forget(['confirm_password']);

        $input->password = password_hash($input->password, PASSWORD_BCRYPT);

        if (User::where('email', $input->email)->exists()) {
            dd("User with {$input->email} already exists");
        }
        $user = User::forceCreate($input->all());

        Auth::login($user);

        return redirect('/account');
    }
}
