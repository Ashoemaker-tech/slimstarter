<?php

namespace App\Http\Middleware;

use App\Support\Auth;
use Psr\Http\Server\RequestHandlerInterface as Handle;
use Psr\Http\Message\ServerRequestInterface as Request;

class RedirectIfGuestMiddleware
{
    public function __invoke(Request $request, Handle $handler)
    {
        if (!Auth::user()) {
            return redirect('/login');
        }

        return $handler->handle($request);
    }
}
