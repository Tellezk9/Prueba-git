<?php

namespace App\Http\Middleware;

use App\Http\Controllers\MiddleController;
use Closure;
use Illuminate\Http\Request;

use function Sodium\compare;

class control
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
        $id = $request->route('id'); //parametro que me llega por la url
        // dd($id);
        if (is_null($id) || $id == 0) {
            return dd(auth()->user()->email);
        } else {
            return redirect('pelicula',$id);
        }
    }
}
