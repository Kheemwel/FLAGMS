<?php

namespace App\Http\Middleware;

use App\Models\UserAccounts;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
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
            return redirect()->route('home-page', ['required_login' => true]);
        } else {
            $user_id = session('user_id');
        }

        if ($user_id) {
            $userRole = UserAccounts::find($user_id)->getRole->role;
            $allowedPages = [
                'Admin' => ['user-accounts-page', 'content-management-page'],
                'Admin/Guidance'=> ['user-accounts-page', 'content-management-page'],
                'Student' => ['student-anecdotal-record-page', 'student-individual-inventory-page', 'student-individual-inventory-report-page'],
                'Parent' => ['child-records-page'],
                'Teacher' => ['students-anecdotals-page', 'request-forms-page']
            ];

            $currentRoute = $request->route()->getName();

            foreach ($allowedPages as $role => $allowedRoutes) {
                if (in_array($currentRoute, $allowedRoutes)) {
                    if (!in_array($currentRoute, $allowedPages[$userRole])) {
                        // Redirect back to the previous page
                        return redirect()->back();
                    }
                    break;
                }
            }
        }

        return $next($request);
    }
}
