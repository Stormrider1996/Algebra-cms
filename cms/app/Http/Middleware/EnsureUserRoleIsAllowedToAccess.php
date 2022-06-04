<?php

namespace App\Http\Middleware;

use App\Models\UserPermission;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class EnsureUserRoleIsAllowedToAccess
{
    
    public function handle(Request $request, Closure $next)
    {
        try {
            $userRole = auth()->user()->role;
            $currentRouteName = Route::currentRouteName();

            if (UserPermission::isRoleHasRightToAccess($userRole, $currentRouteName)
                || in_array($currentRouteName, $this->defaultUserAccessRole()[$userRole])) {
                return $next($request);
            } else {
                abort(403, 'Unauthorized action.');
            }
        } catch (\Throwable $th) {
            abort(403, 'Unauthorized action.');
        }
    }

    private function defaultUserAccessRole()
    {
        return [
            'admin' => [
                'user-permissions',
                'dashboard',
                'pages',
                'users',
                'navigation-menus',
            ],
            
            'user' => [
                'dashboard',
            ],
        ];
    }
}