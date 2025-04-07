<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHome;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\ContactUsController as WebsiteContactus;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Category;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [LoginController::class, 'showUserLoginForm'])
    ->name('login');
Route::post('login', [LoginController::class, 'userLogin'])->name('login');

// Admin login
Route::get('admin/login', [LoginController::class, 'showAdminLoginForm'])
    ->name('admin.login');
Route::post('admin/login', [LoginController::class, 'adminLogin'])->name('admin.login');


Route::middleware(['auth', 'user-access:Admin', 'prevent-back-history'])
    ->group(function () {
        Route::get('/admin-home', [AdminHome::class, 'index'])->name('admin.home');
        Route::get('contactuses', [ContactUsController::class, 'index']);
        Route::resource('contactuses', ContactUsController::class);
        Route::resource('categories', CategoryController::class)->parameter('categories', 'category');
        Route::resource('products', ProductController::class)->parameter('products', 'product');
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('faqs', FAQController::class);
    });


Route::name('website.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about-us', [HomeController::class, 'about'])->name('about');
    Route::get('/product', [HomeController::class, 'shop'])->name('product');
    Route::get('/contact-us', [HomeController::class, 'contactUS'])->name('contact');
    Route::post('contact', [WebsiteContactus::class, 'store'])->name('contact.store');

    // Route::get('/service/{slug}', [HomeController::class, 'services'])->name('service');
});
Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
