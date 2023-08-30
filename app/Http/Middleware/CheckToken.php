<?php

namespace App\Http\Middleware;


use Illuminate\Http\Request;
use Closure;

class CheckToken
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *@var array<string, class-string|string>
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
   public function handle(Request $request, Closure $next){

       dd('checkToken');

       return $next($request);
   }

}
