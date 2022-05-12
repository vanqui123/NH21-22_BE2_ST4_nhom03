<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProtypeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductBookingController;


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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[ProductController::class,'getAllProduct'])->name('index');
Route::get('product-single/{product_id}',[ProductController::class,'getProductID']);

Route::get('shop',[ProtypeController::class,'getAllProductType']);

Route::get('shop/{type_id}',[ProtypeController::class,'getProductType_id']);

Route::get('load-cart-data', [CartController::class, 'cartCount']);
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('cart/delete', [CartController::class, 'destroy'])->name('cart.delete');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('cart/updateDe', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
Route::get('cart/updateIn', [CartController::class, 'increaseQuantity'])->name('cart.increase');


//Contact
Route::post('contact', [ContactController::class, 'addToContact'])->name('contact.add');
Route::get('blog', [BlogController::class, 'getAllBlog']);

//Booking 
Route::get('product/booking', [ProductBookingController::class, 'store'])->name('product');
Route::get('checkout', [ProductBookingController::class, 'show']);

Route::get('/{name?}',[MainController::class,'navigation']);


//Search func
Route::get('/search/key', [SearchController::class, 'search'])->name('search');

//Lấy ds blog




