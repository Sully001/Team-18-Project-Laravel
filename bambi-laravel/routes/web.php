<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/login', function () {
    return view('login');
});

