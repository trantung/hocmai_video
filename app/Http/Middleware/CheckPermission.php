<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    public function handle($request, Closure $next)
    {
        $roleId = checkUserRole();
        if ($roleId != ADMIN) {
            return redirect('/admin/dashboard');
        }

        return $next($request);
    }
    
}
