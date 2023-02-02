<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::check()){

            // admin role == 1

            if(Auth::user()->role == '1'){
                return $next($request);
            }else{
                return redirect('/home')->with('message','คุณไม่ใช่แอดมิน');
            }
        
    }else{
        return redirect('/login')->with('message','เข้าสู่ระบบเพื่อดูรายละเอียด');
    }
        return $next($request);
    }
}
