<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RoleConstant;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        // lay role cua user hien tai dang dang nhap neu role cua no lhong phai admin thi chuyen no ve shop
        if (Auth::user()->role === null) {
            return redirect('/shop');
        }
        return $next($request);
    }
}
