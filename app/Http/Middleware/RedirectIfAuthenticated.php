<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (auth()->user()->hasPermissionTo('user-access')){
                return redirect()->route('user.dashboard.index');
            }elseif (auth()->user()->hasPermissionTo('vendor-access')){
                return redirect()->route('vendor.dashboard.index');
            }elseif (auth()->user()->hasPermissionTo('administrative-access')){
                return redirect()->route('administrative.dashboard.index');
            }else{
                session()->flash('message', 'Non-permitted user.');
                session()->flash('type', 'danger');
                Auth::logout();
                return redirect('/login');
            }
        }
        return $next($request);
    }
}
