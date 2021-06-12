<?php

use App\Models\City;
use App\Models\Hotel;
use App\Models\Country;
use App\Models\Restaurant;
use App\Http\Livewire\User\Country as CountryController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\CitiesList;
use App\Http\Livewire\User\City as UserCity;
use App\Http\Livewire\User\CountriesList;
use App\Http\Livewire\User\Hotel as UserHotel;
use App\Http\Livewire\User\HotelsList;
use App\Http\Livewire\User\PointOfInterest;
use App\Http\Livewire\User\PoisList;
use App\Http\Livewire\User\Recommendation;
use App\Http\Livewire\User\Restaurant as UserRestaurant;
use App\Http\Livewire\User\RestaurantsList;
use App\Models\PointOfInterest as ModelsPointOfInterest;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use BinshopsBlog\Laravel\Fulltext\Commands\Index;

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
    $pois = ModelsPointOfInterest::all()->random(4);
    $hotels = Hotel::all()->random(4);
    $restaurants = Restaurant::all()->random(4);
    return view('landing.welcome', compact('countries', 'cities' , 'pois' , 'hotels' , 'restaurants'));
})->name('home');
//Blog posts Routes
Route::post('/vote/upvote/{id}', 'App\Http\Controllers\PostsController@upVote')->name('upvote');
Route::post('/vote/downvote/{id}', 'App\Http\Controllers\PostsController@downVote')->name('downvote');
Route::resource('/blog', PostsController::class);

// user routes
Route::middleware(['auth' ])->group(function(){
    route::get('/countries',CountriesList::class )->name('user.countries');
    route::get('/cities',CitiesList::class )->name('user.cities');
    route::get('/restaurants',RestaurantsList::class )->name('user.restaurants');
    route::get('/hotels',HotelsList::class )->name('user.hotels');
    route::get('/pois',PoisList::class )->name('user.pois');

    route::get('/country/{id}',CountryController::class )->name('user.country');
    route::get('/city/{id}',UserCity::class )->name('user.city');
    route::get('/point-of-interest/{id}',PointOfInterest::class )->name('user.poi');
    route::get('/hotel/{id}',UserHotel::class )->name('user.hotel');
    route::get('/restaurant/{id}',UserRestaurant::class )->name('user.restaurant');


    route::get('/get-recomendation',Recommendation::class )->name('user.recomendation');
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

//Comment Route
Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.add');
Route::delete('/comment/delete/{id}', 'App\Http\Controllers\CommentController@destroy')->name('comment.delete');
//Vote Routes




require __DIR__ . '/auth.php';
Route::get('/blogg', function () {
    return view('blog');
});