<?php

namespace App\Http\Middleware;

use Closure;

class AuthMiddleware
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







        session_start();
        try {
            if($_SESSION["id"] && $_SESSION["name"]){
                return $next($request);
            }
        } catch (\Throwable $th) {
         return redirect('Admin\Login');
        }




    }

}
