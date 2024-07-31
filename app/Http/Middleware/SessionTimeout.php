<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SessionTimeout
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $timeout = config('session.lifetime') * 60;
            $lastActivity = session('last_activity_time', time());

            if (time() - $lastActivity > $timeout) {
                Auth::logout();
                $request->session()->invalidate();
                return redirect()->route('login')->with('message', 'You have been logged out due to inactivity.');
            }

            session(['last_activity_time' => time()]);
        }

        return $next($request);
    }
}
