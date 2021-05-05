<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\UserCourse;

class CheckClass
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
        UserCourse::where('user_id', Auth::id())->firstOrFail();
        
        return $next($request);
    }
}
