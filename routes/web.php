<?php

use App\Http\Controllers\UserAccountsMaker;
use App\Http\Controllers\UserAccountsSeeder;
use App\Http\Middleware\CheckUserCredentials;
use App\Livewire\ApprovalFormsLivewire;
use App\Livewire\AuditTrailLivewire;
use App\Livewire\CalendarColorsLivewire;
use App\Livewire\ContentManagementLivewire;
use App\Livewire\DatabaseLivewire;
use App\Livewire\DatabaseManagementLivewire;
use App\Livewire\DigitalRecordsLivewire;
use App\Livewire\FillOutFormsLivewire;
use App\Livewire\GuidanceLivewire;
use App\Livewire\GuidanceProgramLivewire;
use App\Livewire\GuidanceScheduleTagsLivewire;
use App\Livewire\HomeLivewire;
use App\Livewire\ItemImagesLivewire;
use App\Livewire\ItemTagsLivewire;
use App\Livewire\ItemTypesLivewire;
use App\Livewire\LostFoundLivewire;
use App\Livewire\MyChildRecordLivewire;
use App\Livewire\NotificationLivewire;
use App\Livewire\OffensesLivewire;
use App\Livewire\ParentsLivewire;
use App\Livewire\PhysicalRecordsLivewire;
use App\Livewire\PrincipalsLivewire;
use App\Livewire\ProfileLivewire;
use App\Livewire\ProfilePicturesLivewire;
use App\Livewire\RequestFormsLivewire;
use App\Livewire\RolesLivewire;
use App\Livewire\StudentAnecdotalLivewire;
use App\Livewire\StudentInventoryLivewire;
use App\Livewire\StudentsLivewire;
use App\Livewire\TeachersLivewire;
use App\Livewire\UserAccountsLivewire;
use App\Livewire\UserDashboardLivewire;
use App\Models\GuidanceScheduleTags;
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

Route::get('/>>inspire', function() {
    Artisan::call('inspire');
    echo Artisan::output();
});

Route::get('/>>cache:clear', function() {
    Artisan::call('cache:clear');
    echo Artisan::output();
});

Route::get('/>>migrate', function() {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/>>migrate:refresh', function() {
    Artisan::call('migrate:refresh');
    echo Artisan::output();
});

Route::get('/>>migrate:rollback', function() {
    Artisan::call('migrate:rollback');
    echo Artisan::output();
});

Route::get('/>>storage:link', function() {
    Artisan::call('storage:link');
    echo Artisan::output();
});

Route::get('/>>schedule:work', function() {
    Artisan::call('schedule:work');
    echo Artisan::output();
});

Route::get('/>>schedule:run', function() {
    Artisan::call('schedule:run');
    echo Artisan::output();
});

Route::get('/>>queue:work', function() {
    Artisan::call('queue:work');
    echo Artisan::output();
});

Route::get('/>>backup:run', function() {
    Artisan::call('backup:run --only-db');
    echo Artisan::output();
});

Route::get('/>>backup:clean', function() {
    Artisan::call('backup:clean');
    echo Artisan::output();
});

Route::get('/--createAdmins/{count}', function(int $count) {
    UserAccountsMaker::createAdmins($count);
});

Route::get('/--createStudents/{count}', function(int $count) {
    UserAccountsMaker::createStudents($count);
});

Route::get('/--createParents/{count}', function(int $count) {
    UserAccountsMaker::createParents($count);
});

Route::get('/--createTeachers/{count}', function(int $count) {
    UserAccountsMaker::createTeachers($count);
});

Route::middleware([CheckUserCredentials::class])->group(function () {
    //Common
    Route::get('/user-dashboard', UserDashboardLivewire::class)->name('user-dashboard-page');
    Route::get('/profile', ProfileLivewire::class)->name('profile-page');
    Route::get('/notification', NotificationLivewire::class)->name('notification-page');
    Route::get('/lost-and-found', LostFoundLivewire::class)->name('lost-and-found-page');
    Route::get('/fill-out-forms', FillOutFormsLivewire::class)->name('fill-out-forms-page');

    //Admin
    Route::get('/user-accounts', UserAccountsLivewire::class)->name('user-accounts-page');
    Route::get('/content-management', ContentManagementLivewire::class)->name('content-management-page');
    Route::get('/roles', RolesLivewire::class)->name('roles-page');
    Route::get('/profile-pictures', ProfilePicturesLivewire::class)->name('profile-pictures-page');
    Route::get('/offenses', OffensesLivewire::class)->name('offenses-page');
    Route::get('/guidance-schedule-tags', GuidanceScheduleTagsLivewire::class)->name('guidance-schedule-tags-page');
    Route::get('/item-images', ItemImagesLivewire::class)->name('item-images-page');
    Route::get('/item-types', ItemTypesLivewire::class)->name('item-types-page');
    Route::get('/item-tags', ItemTagsLivewire::class)->name('item-tags-page');
    Route::get('/database-management', DatabaseManagementLivewire::class)->name('database-management-page');
    Route::get('/audit-trail', AuditTrailLivewire::class)->name('audit-trail-page');

    //Guidance
    Route::get('/students', StudentsLivewire::class)->name('students-page');
    Route::get('/guidance-program', GuidanceProgramLivewire::class)->name('guidance-program-page');
    Route::get('/approval-forms', ApprovalFormsLivewire::class)->name('approval-forms-page');
    Route::get('/physical-records', PhysicalRecordsLivewire::class)->name('physical-records-page');
    Route::get('/digital-records', DigitalRecordsLivewire::class)->name('digital-records-page');

    //Student
    Route::get('/student-anecdotal-record', StudentAnecdotalLivewire::class)->name('student-anecdotal-record-page');
    Route::get('/student-individual-inventory', StudentInventoryLivewire::class)->name('student-individual-inventory-page');

    //Parent
    Route::get('/my-child-records', MyChildRecordLivewire::class)->name('child-records-page');

    //Teacher
    Route::get('/request-forms', RequestFormsLivewire::class)->name('request-forms-page');
});
