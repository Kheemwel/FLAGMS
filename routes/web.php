<?php

use App\Http\Middleware\CheckUserCredentials;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home-page');
Route::view('/about', 'about')->name('about-page');

Route::view('/test', 'livewire.tests.test_livewire')->name('test-livewire-page');

Route::middleware([CheckUserCredentials::class])->group(function () {
    //Common
    Route::view('/user-dashboard', 'common.user-dashboard')->name('user-dashboard-page');
    Route::view('/profile', 'common.profile')->name('profile-page');
    Route::view('/notification', 'common.notification')->name('notification-page');
    Route::view('/user-guidance-program', 'common.user-guidance-program')->name('user-guidance-program-page');
    Route::view('/fill-out-forms', 'common.fill-out-forms')->name('fill-out-forms-page');
    Route::view('/user-lost-and-found', 'common.user-lost-and-found')->name('user-lost-and-found-page');

    //Admin
    Route::view('/user-accounts', 'admin.user-accounts')->name('user-accounts-page');
    Route::view('/roles', 'admin.roles')->name('roles-page');
    Route::view('/profile-pictures', 'admin.profile-pictures')->name('profile-pictures-page');
    Route::view('/item-types', 'admin.item-types')->name('item-types-page');

    //Guidance
    Route::view('/students', 'guidance.students')->name('students-page');
    Route::view('anecdotal-records', 'guidance.anecdotal-records')->name('anecdotal-records-page');
    Route::view('/violation-forms', 'guidance.violation-forms')->name('violation-forms-page');
    Route::view('/home-visitation-forms', 'guidance.home-visitation-forms')->name('home-visitation-forms-page');
    Route::view('/individual-inventory', 'guidance.individual-inventory')->name('individual-inventory-page');
    Route::view('/guidance-program', 'guidance.guidance-program')->name('guidance-program-page');
    Route::view('/approve-forms', 'guidance.approve-forms')->name('approve-forms-page');
    Route::view('/lost-and-found', 'guidance.lost-and-found')->name('lost-and-found-page');

    //Student
    Route::view('/student-anecdotal-record', 'student.student-anecdotal-record')->name('student-anecdotal-record-page');
    Route::view('/student-individual-inventory', 'student.student-individual-inventory')->name('student-individual-inventory-page');
    Route::view('/student-individual-inventory-report', 'student.student-individual-inventory-report')->name('student-individual-inventory-report-page');

    //Parent
    Route::view('/my-child-records', 'parent.parent-child-records')->name('child-records-page');

    //Teacher
    Route::view('/students-anecdotals', 'teacher.teacher-students')->name('students-anecdotals-page');
    Route::view('/request-forms', 'teacher.teacher-request-forms')->name('request-forms-page');
});