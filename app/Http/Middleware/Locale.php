<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use Illuminate\Support\Facades\Auth;

class Locale extends Middleware
{
    public function handle($request, Closure $next)
    {
        app()->setLocale($request->session()->get('locale'));

        return $next($request);
    }
}
