<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class CheckRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Sentinel::check()) {
            return redirect()->route('login')->with('info', 'You must be logged in!');
        } else if (!Sentinel::inRole('admin')) {
           return redirect('/');
        }
        return $next($request);
    }
}
