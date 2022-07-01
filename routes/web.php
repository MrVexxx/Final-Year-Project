<?php

use App\Http\Controllers\Admin\AddUserController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NanyHireController;
use App\Http\Controllers\Admin\RateController;
use App\Http\Controllers\Admin\SkillController;

use App\Http\Controllers\Customer\CustomerProfileController;
use App\Http\Controllers\Customer\RatingController;
use App\Http\Controllers\Frontend\HireController;
use App\Http\Controllers\Nany\NanyApplicationController;
use App\Http\Controllers\Nany\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WishListController as ControllersWishListController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/category', [PageController::class, 'category']);
Route::get('/category/{id}', [PageController::class, 'category_show']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/nany', [PageController::class, 'nany']);
Route::get('/nany/register', [PageController::class, 'nanyRegisterForm']);
Route::post('/nany/register', [PageController::class, 'registerNany']);
Route::post('/feedback', [PageController::class, 'feedback']);
Route::resource('wishlist', ControllersWishListController::class);
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::view('/terms', 'frontend.pages.policy.terms');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Customer
Route::middleware(['auth', 'isCustomer'])->name('customer')->prefix('customer')->group(function () {
    Route::resource('hire', CustomerProfileController::class);
    Route::resource('rating', RatingController::class);
});




//Admin
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('/admin/skill', SkillController::class);
    Route::resource('/admin/application', ApplicationController::class);
    Route::resource('/admin/add_user', AddUserController::class);
    Route::resource('/admin/feedbacks', FeedbackController::class);
    Route::resource('/admin/category', CategoryController::class);
    Route::resource('/admin/hire', NanyHireController::class);
    Route::resource('/admin/gallery', GalleryController::class);
    Route::resource('/admin/rating', RateController::class);

});

//Seller
Route::middleware([
    'auth', 'isNany',
])->name('nany')->prefix('nany')->group(function () {
    Route::resource('profile', ProfileController::class);
    Route::resource('applications', NanyApplicationController::class);
});
// Hire
Route::get('/nany/{id}/add', [HireController::class, 'add']);
Route::post('/nany/{id}/hire', [HireController::class, 'hire']);