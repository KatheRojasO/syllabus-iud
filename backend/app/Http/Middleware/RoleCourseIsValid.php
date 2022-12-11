<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleCourseIsValid
{

    const STUDENT_ROLE = 3;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role_id == self::STUDENT_ROLE) {
            return redirect('home');
        }

        return $next($request);
    }
}
