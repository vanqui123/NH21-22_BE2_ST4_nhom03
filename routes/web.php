<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/{name?}', function ($name) {
//     return view($name);
// });
Route::get('/',[ProductController::class,'getAllProduct']);
Route::get('product-single/{product_id}',[ProductController::class,'getProductID']);

Route::get('shop',[ProductController::class,'getAllProductType']);
Route::get('shop',[ProductController::class,'getType']);
Route::get('shop/{type_id}',[ProductController::class,'getProductType_id']);

Route::get('load-cart-data', [CartController::class, 'cartCount']);
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('cart/delete', [CartController::class, 'destroy'])->name('cart.delete');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



Route::get('/{name?}',[MainController::class,'navigation']);

