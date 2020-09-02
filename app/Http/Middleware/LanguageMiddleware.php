<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    /**
     * Handle an incoming request then set the correct language in app
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get the route language
        $routeLanguage = $request->segment(1);
        $fallBackLanguage = config('app.fallback_locale');
        $language = $routeLanguage;

        // return the fallback language if the route language is not in the available languages
        if(!in_array($routeLanguage, config('app.locales'))) $language = $fallBackLanguage;

        // Set the correct language
        if(App::getLocale() !== $language) App::setLocale($language);

        return $next($request);
    }
}