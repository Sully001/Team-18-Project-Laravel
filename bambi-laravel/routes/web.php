<?php

use App\Models\Basket;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PreviousOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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
// lots of routes that require auth middleware
Route::group(['middleware' => 'auth'], function() {
    //POST logout
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    //Basket routes
    Route::delete('/basket/remove', [BasketController::class, 'destroy'])->name('basket.remove')->middleware('checkId');
    Route::get('/basket/{id}', [BasketController::class, 'index'])->name('basket')->middleware('checkId');
    Route::post('/basket', [BasketController::class, 'store'])->name('basket.store')->middleware('checkId');

    //Order routes
    Route::post('/order', [OrderController::class, 'checkout'])->name('checkout')->middleware('checkId');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders')->middleware('checkId');

    //Order Detail Routes
    Route::get('/order/{id}', [PreviousOrderController::class, 'index'])->name('previous.orders')->middleware('checkId');
});

Route::group(['middleware' => 'guest'], function() {
    //Login route
    Route::post('login', [LoginController::class, 'store'])->name('signin');
    //Gets login page
    Route::get('/loginpage', [RegisterController::class, 'index'])->name('login');
    //Register route
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
});

Route::group(['middleware' => 'reject'], function() {
    //Login route
    Route::get('/logout')->name('logout');
    Route::get('/basket')->name('basket.store');
    Route::post('/order')->name('checkout');
});

//Global Middlewares
Route::get('/', [HomeController::class, 'index'])->name('welcome');

//Route for all products
Route::get('/shop', [ProductController::class, 'index'])->name('products.index');

//Route to distinguish between mens/womens
Route::get('/shop/men', [ProductController::class, 'shopMen'])->name('products.men');

Route::get('/shop/women', [ProductController::class, 'shopWomen'])->name('products.women');

//Route for a single product
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



