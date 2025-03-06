<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        // Only return a redirect path for non-JSON requests
        if (!$request->expectsJson()) {
            return route('login');
        }

        // Return null for JSON requests (no redirect)
        return null;
    }
}
