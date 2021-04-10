<?php

use App\Models\City;
use App\Models\Hotel;
use App\Models\Country;
use App\Models\Restaurant;
use App\Http\Livewire\Admins\Users;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admins\Dashboard;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // dd(scandir('../storage/app/public/POI/images/'));
    return view('landing.welcome');
})->name('home');

// admin routes
Route::middleware(['auth', 'role:administrator'])->group(function () {

    route::get('/admin/dashboard', function () {
        return view('pages.admins.dashboard');
    })->name('admin.dashboard');

    route::get('/admin/users', function () {
        return view('pages.admins.dashboard');
    })->name('admin.users');

    // route::get('/admin/users', Users::class)->name('admin.users');
    // route::get('/admin/countries', Countries::class)->name('admin.countries');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');


route::get('/admin', [AdminController::class, 'show'])->middleware(['auth', 'admin']);

require __DIR__ . '/auth.php';