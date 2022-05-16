<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AdminController;
use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd("Hola desde el middleware Admin :D");
        if (auth()->user()->admin()) {
            return $next($request);
        }else{
            return redirect('home')->with('mensaje','No puedes entrar si no eres un admin :v');
            // dd('No puedes acceder ya que no eres admin');
        }
    }
}
