<?php

use App\Models\City;
use App\Models\Hotel;
use App\Models\Country;
use App\Models\Restaurant;
use App\Http\Livewire\Admins\Users;
use App\Http\Livewire\User\Country as CountryController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admins\Dashboard;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminController;
use App\Http\Livewire\User\City as UserCity;
use App\Http\Livewire\User\Country as UserCountry;

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
    $countries = Country::all()->random(4);
    $cities = City::all()->random(4);
    return view('landing.welcome', compact('countries', 'cities'));
})->name('home');

route::get('/test', function () {
    return view('landing.tetst' , ['cities'=> Country::find(1)]);
});

Route::middleware(['auth' ])->group(function(){
    route::get('/country/{id}',CountryController::class )->name('user.country');
    route::get('/city/{id}',UserCity::class )->name('user.city');
});


// admin routes
Route::middleware(['auth', 'role:administrator'])->group(function () {

    route::get('/admin/users', function () {
        return view('pages.admins.dashboard');
    })->name('admin.users');

    route::get('/admin/countries', function () {
        return view('pages.admins.dashboard');
    })->name('admin.countries');

    route::get('/admin/country/{id}/manage/cities', function ($id) {
        $country = Country::findOrFail($id);
        return view('pages.admins.country', ['id' => $id, 'country' => $country]);
    })->name('admin.country.manage.cities');

    route::get('/admin/country/{id}/manage/hotels', function ($id) {
        $country = Country::findOrFail($id);
        return view('pages.admins.country', ['id' => $id, 'country' => $country]);
    })->name('admin.country.manage.hotels');

    route::get('/admin/country/{id}/manage/pois', function ($id) {
        $country = Country::findOrFail($id);
        return view('pages.admins.country', ['id' => $id, 'country' => $country]);
    })->name('admin.country.manage.pointsOfInterest');

    route::get('/admin/country/{id}/manage/restaurants', function ($id) {
        $country = Country::findOrFail($id);
        return view('pages.admins.country', ['id' => $id, 'country' => $country]);
    })->name('admin.country.manage.restaurants');

    route::get('/admin/blog', function () {
        return view('pages.admins.dashboard');
    })->name('admin.blog');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


route::get('/admin', [AdminController::class, 'show'])->middleware(['auth', 'admin']);

require __DIR__ . '/auth.php';