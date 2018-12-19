<?php

namespace App\Http\Middleware;

use Closure;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {

            $lang = session()->get('locale');

            if(in_array($lang, config()->get('app.locales'))) {
                app()->setLocale($lang);
            } else {
                app()->setLocale(config()->get('app.locale'));
            }

        }
        return $next($request);
    }
}
