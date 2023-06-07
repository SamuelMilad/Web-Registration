<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class SetLocale
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        } // if no session exists, you may default to a specific language, for example 'en'
        else {
            App::setLocale('en');
        }

        return $next($request);
    }
}
