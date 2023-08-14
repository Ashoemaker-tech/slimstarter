<?php

namespace App\Support;

use App\Models\User;

class Auth
{
    public static function attempt($email, $password)
    {
        $user = User::where('email', '=', $email)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                self::login($user);
                return true;
            }
        }
        return false;
    }

    public static function login($user)
    {
        $_SESSION['user'] = [
            'username' => $user->username,
            'email' => $user->email
        ];
        session_regenerate_id(true);
    }

    public static function logout()
    {
        $_SESSION = [];
        session_destroy();
        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }

    public static function user()
    {
        if (isset($_SESSION['user'])) {
            /** 
             * undecided to remove this query or not
             * This query will help prevent session spoofing 
             * checks periodically that the user exists in the DB
             */
            $query = User::where('email', '=', $_SESSION['user']['email'])->first();
            // Direct queries in eloquent can still access $hidden or $guarded model fields!
            // send only relevent information needed for user authentication
            $user = [
                'email'    => $query->email,
                'username' => $query->username,
            ];
            return (object) $user;
        }
        return false;
    }
}
