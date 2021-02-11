<?php

use Illuminate\Support\Facades\Route;
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
    return view('landing.welcome');
})->name('home');

Route::view('/contact', 'landing.contactUs')->name('contact-us');

// testing modal
// Route::view('/test/{id}', 'test')->name('test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


route::get('/admin', [AdminController::class, 'show'])->middleware(['auth', 'admin']);

require __DIR__ . '/auth.php';