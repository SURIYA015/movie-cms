<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

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
        if (!$request->expectsJson()) {
            if (Arr::first($this->guards) === 'web') {
                return route('frontend.login');
            }
        }
        if (!$request->expectsJson()) {
            if (Arr::first($this->guards) === 'admin') {
                return route('login');
            }
        }
        return route('frontend.login');
    }

    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;
        // dd($this->guards);
        return parent::handle($request, $next, ...$guards);
    }
}
