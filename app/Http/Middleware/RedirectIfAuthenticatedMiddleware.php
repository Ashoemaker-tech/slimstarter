<?php

namespace App\Http\Middleware;

use App\Support\Auth;
use Psr\Http\Server\RequestHandlerInterface as Handle;
use Psr\Http\Message\ServerRequestInterface as Request;

class RedirectIfAuthenticatedMiddleware
{
    public function __invoke(Request $request, Handle $handler)
    {
        if (Auth::user()) {
            return redirect('/account');
        }

        return $handler->handle($request);
    }
}
