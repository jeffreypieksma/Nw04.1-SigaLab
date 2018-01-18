<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
    //Check if user is admin 
    if ( \Auth::check() && \Auth::user()->is_admin)
    {
        return $next($request);
    }
    return redirect('/home');

  }
}
