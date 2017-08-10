<?php

namespace App\Http\Middleware;

use Closure;

class Aerolineas
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
        if(!$request->user()){
             return response()->view('errors.401');//dd('Inicie sesion');//mandar a un error en views/errors
        }else{
            if($request->user()->Aerolineas()){
                return $next($request);
            }else{
                return response()->view('errors.401');
            }
        }
    }
}
