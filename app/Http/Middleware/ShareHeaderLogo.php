<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Models\HeaderLogo;

class ShareHeaderLogo
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
        $headerlogo = HeaderLogo::first();
        View::share('headerlogo', $headerlogo);
        return $next($request);
    }
}
