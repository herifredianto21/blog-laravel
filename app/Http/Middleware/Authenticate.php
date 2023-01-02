<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\URL;
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
        if (! $request->expectsJson()) {
            // return route('login');
            if($request->routeIs('author.*')){
                session()->flash('fail', 'You must sign in first');
                return route('author.login',['fail'=>true,'returnUrl'=>URL::current()]);
            }
        }
    }
}
