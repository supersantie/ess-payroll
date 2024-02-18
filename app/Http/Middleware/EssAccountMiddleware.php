<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EssAccountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the ESS Account is present in the session
        if (!$request->session()->has('ess_account')) {
            // If not present, redirect the user to the OTP validation page
            return redirect()->route('ess.validate.otp');
        }

        // If the ESS Account is present, proceed with the request
        return $next($request);
    }
}
