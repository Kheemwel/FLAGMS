<?php

use App\Http\Livewire\DashboardLivewire;
use App\Http\Livewire\LoginLivewire;
use App\Http\Livewire\MyLivewire;
use App\Http\Middleware\CheckMyUserSession;
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
//     // return view('welcome');
//     return view("sample");
// });

Route::view('/', 'welcome');

Route::view('/data-types-sample', 'livewire.all-data-types.main')->name('data_types_sample');
Route::view('/image-data-sample', 'livewire.image_data.main')->name('image_data_sample');

Route::view('/my-sample', 'my-sample-index')->name('my-sample');

Route::get('/sample', function () {
    return view('sample');
})->name('sample');

Route::get('/posts-index', function () {
    return view('posts-index');
})->name('post-index');

Route::get('/sample2', function () {
    return view('sample2');
})->name('sample2');

Route::get('/sample3', function () {
    return view('sample3');
})->name('sample3');

Route::get('/myusers-index', function () {
    return view('myusers-index');
})->name('myusers-index');

Route::get('/livewire-modal-index', function () {
    return view('livewire-modal-index');
})->name('livewire-modal-index');

Route::get('/livewire-fk-index', function () {
    return view('livewire-fk-index');
})->name('livewire-fk-index');

Route::view('/login-livewire', 'livewire.livewire_login.login')->name('login_livewire');
Route::middleware([CheckMyUserSession::class])->group(function () {
    Route::view('/dashboard-livewire', 'livewire.livewire_login.dashboard')->name('dashboard_livewire');
    Route::view('/profile-livewire', 'livewire.livewire_login.profile')->name('profile_livewire');
});

