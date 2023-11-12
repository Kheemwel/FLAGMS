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
            $privileges = UserAccounts::find($user_id)->getRole->privileges()->pluck('privilege')->toArray();
            $allowedPages = [
                'lost-and-found-page' => ['ManageExpiredItems', 'ManageClaimedItems', 'ViewOnlyFoundtItems', 'AddLostAndFound', 'DeleteLostAndFound', 'EditLostAndFound'],
                'fill-out-forms-page' => ['FillOutForms'],
                'user-accounts-page' => ['ViewAccounts', 'ViewGuidanceAccounts', 'ViewParentAccounts', 'ViewPrincipalAccounts', 'ViewStudentAccounts', 'ViewTeacherAccounts'],
                'content-management-page' => ['ManageWebsiteContent'],
                'roles-page' => ['ManageRoles'],
                'database-page'=> ['ManageDatabase'],
                'students-page' => ['ViewStudentSummary', 'ViewStudentsAnecdotal', 'WriteStudentsAnecdotal'],
                'guidance-program-page' => ['ViewGuidanceProgram'],
                'approval-forms-page'=> ['ApproveForm'],
                'student-anecdotal-record-page' => ['StudentPrivileges'],
                'student-individual-inventory-page' => ['StudentPrivileges'],
                'student-individual-inventory-report-page' => ['StudentPrivileges'],
                'child-records-page' => ['ParentPrivileges'],
                'request-forms-page' => ['RequestForm']
            ];

            $currentRoute = $request->route()->getName();

            if (isset($allowedPages[$currentRoute]) && empty(array_intersect($privileges, $allowedPages[$currentRoute]))) {
                return redirect()->back();
            }
        }

        return $next($request);
    }
}
