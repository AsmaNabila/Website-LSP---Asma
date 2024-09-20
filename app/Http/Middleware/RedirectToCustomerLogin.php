<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToCustomerLogin
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is not authenticated as customer
        if (!auth()->guard('customers')->check()) {
            // Redirect to customer login page
            return redirect()->route('login.login');
        }

        return $next($request);
    }
}
