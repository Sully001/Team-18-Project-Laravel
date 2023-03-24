<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MailController;
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
Route::group(['middleware' => 'auth'], function () {
    //POST logout
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    //Basket routes
    Route::delete('/basket/remove', [BasketController::class, 'destroy'])->name('basket.remove');
    Route::get('/basket/{id}', [BasketController::class, 'index'])->name('basket')->middleware(['checkId']);
    Route::post('/basket', [BasketController::class, 'store'])->name('basket.store');

    //Order routes
    Route::post('/order', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/order/{id}', [PreviousOrderController::class, 'index'])->name('previous.orders');

    //Order Detail Routes
    Route::get('/order/{id}', [PreviousOrderController::class, 'index']);

    //Email Route for Register and Order Email Notif
    Route::get('/mail', [MailController::class, 'sendMail']);
});

Route::group(['middleware' => 'guest'], function () { 
    //Gets login page
    Route::get('/loginpage', [RegisterController::class, 'index'])->name('login');
    //Register route
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    //Login route
    Route::post('/login', [LoginController::class, 'store'])->name('signin');
});


Route::group(['middleware' => 'reject'], function () {
    Route::get('/logout', [LogoutController::class, 'logout']);
    Route::get('/basket', [BasketController::class, 'store']);
    Route::get('/order', [OrderController::class, 'checkout']);

});


//Global Routes
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

Route::post('/contact/email', [HomeController::class, 'contactUs'])->name('contact.email');

