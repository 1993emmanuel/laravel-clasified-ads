<?php

use Illuminate\Support\Facades\Route;
// categorycontroller -subcategories -childcategories
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
// country state y cities controllers
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
// add listingController
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Frontend\ListingFrontController;
use App\Http\Controllers\Admin\ListingController as AdminListingsController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/',[ListingFrontController::class, 'welcome'])->name('welcome');

// Route::get('/', function () {
//     // if(auth()->user()){auth()->user()->assignRole('admin');}
//     return view('welcome');
// });

Route::get('/all-listings',[ListingFrontController::class,'index'])->name('all-listings');

Route::middleware(['auth:sanctum', 'verified','role:admin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/',[AdminController::class, 'index'])->name('index');
        Route::resource('listings', AdminListingsController::class);
        Route::resource('categories', CategoryController::class);

        Route::get('categories/{category}/add-sub',[CategoryController::class, 'add_sub'])->name('add_sub');
        Route::post('categories/{category}/add-sub',[CategoryController::class, 'add_sub_store'])->name('add_sub.store');

        Route::resource('subcategories', SubCategoryController::class);
        Route::resource('childcategories',ChildCategoryController::class);
        Route::resource('countries', CountryController::class);

        Route::get('countries/{country}/add-state',[CountryController::class, 'add_state'])->name('add_state');
        Route::post('countries/{country}/add-state',[CountryController::class, 'add_state_store'])->name('add_state.store');

        Route::resource('states',StateController::class);
        Route::resource('cities', CityController::class);
});

Route::resource('listings', ListingController::class)->middleware('auth');