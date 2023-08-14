<?php

use App\Support\Route;
use App\Http\Middleware\RedirectIfAuthenticatedMiddleware as Auth;
use App\Http\Middleware\RedirectIfGuestMiddleware as Guest;

Route::get('/', 'WelcomeController@index');
Route::get('/account', 'AccountController@index')->add(Guest::class);
Route::get('/register', 'RegisterController@show')->add(Auth::class);
Route::post('/register', 'RegisterController@store')->add(Auth::class);
Route::get('/login', 'LoginController@show')->add(Auth::class);
Route::post('/login', 'LoginController@store')->add(Auth::class);
Route::get('/logout', 'LoginController@destroy')->add(Guest::class);
