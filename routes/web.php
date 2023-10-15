<?php

use App\Http\Middleware\CheckUserCredentials;
use App\Livewire\ContentManagementLivewire;
use App\Livewire\DatabaseLivewire;
use App\Livewire\GuidanceLivewire;
use App\Livewire\GuidanceProgramLivewire;
use App\Livewire\HomeLivewire;
use App\Livewire\ItemImagesLivewire;
use App\Livewire\ItemTagsLivewire;
use App\Livewire\ItemTypesLivewire;
use App\Livewire\LostFoundLivewire;
use App\Livewire\NotificationLivewire;
use App\Livewire\OffensesLivewire;
use App\Livewire\ParentsLivewire;
use App\Livewire\PrincipalsLivewire;
use App\Livewire\ProfileLivewire;
use App\Livewire\ProfilePicturesLivewire;
use App\Livewire\RolesLivewire;
use App\Livewire\StudentsLivewire;
use App\Livewire\TeachersLivewire;
use App\Livewire\Test\TestLivewire;
use App\Livewire\UserAccountsLivewire;
use App\Livewire\UserDashboardLivewire;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', function () {
//     return view('home');
// })->name('home-page');
// Route::view('/about', 'about')->name('about-page');

Route::get('/', HomeLivewire::class)->name('home-page');

Route::view('/test', 'livewire.tests.test_livewire')->name('test-livewire-page');
Route::view('/test-content', 'livewire.tests.test-container-content')->name('test-content-page');
Route::view('/test-livewire', 'livewire.tests.test-livewire')->name('test-livewire-page');
Route::get('/test.livewire', TestLivewire::class)->name('test.livewire-page');

Route::middleware([CheckUserCredentials::class])->group(function () {
    //Common
    Route::get('/user-dashboard', UserDashboardLivewire::class)->name('user-dashboard-page');
    Route::get('/profile', ProfileLivewire::class)->name('profile-page');
    Route::get('/notification', NotificationLivewire::class)->name('notification-page');
    Route::view('/user-guidance-program', 'common.user-guidance-program')->name('user-guidance-program-page');
    Route::get('/lost-and-found', LostFoundLivewire::class)->name('lost-and-found-page');
    Route::view('/fill-out-forms', 'common.fill-out-forms')->name('fill-out-forms-page');

    //Admin
    Route::get('/user-accounts', UserAccountsLivewire::class)->name('user-accounts-page');
    Route::get('/guidance', GuidanceLivewire::class)->name('guidance-page');
    Route::get('/parents', ParentsLivewire::class)->name('parents-page');
    Route::get('/teachers', TeachersLivewire::class)->name('teachers-page');
    Route::get('/principals', PrincipalsLivewire::class)->name('principals-page');
    Route::get('/content-management', ContentManagementLivewire::class)->name('content-management-page');
    Route::get('/roles', RolesLivewire::class)->name('roles-page');
    Route::get('/profile-pictures', ProfilePicturesLivewire::class)->name('profile-pictures-page');
    Route::get('/offenses', OffensesLivewire::class)->name('offenses-page');
    Route::view('/calendar-colors', 'admin.calendar-colors')->name('calendar-colors-page');
    Route::get('/item-images', ItemImagesLivewire::class)->name('item-images-page');
    Route::get('/item-types', ItemTypesLivewire::class)->name('item-types-page');
    Route::get('/item-tags', ItemTagsLivewire::class)->name('item-tags-page');
    Route::view('/guidance-records', 'admin.guidance-records')->name('guidance-records-page');
    Route::get('/database', DatabaseLivewire::class)->name('database-page');

    //Guidance
    Route::get('/students', StudentsLivewire::class)->name('students-page');
    Route::view('anecdotal-records', 'guidance.anecdotal-records')->name('anecdotal-records-page');
    Route::view('/violation-forms', 'guidance.violation-forms')->name('violation-forms-page');
    Route::view('/home-visitation-forms', 'guidance.home-visitation-forms')->name('home-visitation-forms-page');
    Route::view('/individual-inventory', 'guidance.individual-inventory')->name('individual-inventory-page');
    Route::get('/guidance-program', GuidanceProgramLivewire::class)->name('guidance-program-page');
    Route::view('/approval-forms', 'guidance.approval-forms')->name('approval-forms-page');

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
