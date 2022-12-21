<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserAuth
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
        // tried this code but it doesn't work

        // if($request->path()=="login" && $request->session()->has('user'))
        // {
        //     return redirect('/');
        // }

        // new code that I have created

        // if($request->path()=="login" && Session::get('name')==$request->name ){
        //     return redirect('/');
        // }

        return $next($request);
    }
}
