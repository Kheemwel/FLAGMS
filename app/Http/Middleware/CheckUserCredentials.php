<?php

namespace App\Http\Middleware;

use App\Models\UserAccounts;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserCredentials
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('user_id')) {
            return redirect()->route('home-page');
        } else {
            $user_id = session('user_id');
        }

        if ($user_id) {
            $userRole = UserAccounts::find($user_id)->getRole->role;
            $allowedPages = [
                'user-accounts-page' => ['Admin', 'Admin/Guidance'],
                'student-anecdotal-record-page' => ['Students']
            ];

            $currentRoute = $request->route()->getName();

            if (isset($allowedPages[$currentRoute])) {
                if (!in_array($userRole, $allowedPages[$currentRoute])) {
                    // Redirect back to the previous page
                    return redirect()->back();
                }
            }
        }

        return $next($request);
    }
}
