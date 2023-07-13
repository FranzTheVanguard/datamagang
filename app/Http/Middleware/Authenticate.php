<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {   
        if (! $request->expectsJson()) {
            return route('login');
        }
        
    }
    public function handle($request, Closure $next, ...$guards)
    {   
        $user = Auth::user();
        if(!$user) return redirect()->route('/');
        if ($user->role !== "admin") {
            $route = $request->route()->getName();
            // Check if the current route is a non-read-only route

            if (Str::contains($route, ['create', 'update', 'delete', 'store', 'edit', 'destroy'])) {
                // Redirect the user to a specific page or route
                return Redirect::back()->withErrors(['You are not authorized to perform this action.']);
            }
        }

        $this->authenticate($request, $guards);
        
        return $next($request);
    }
}
