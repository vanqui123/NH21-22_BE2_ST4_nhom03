<?php

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
// Route::get('/{name?}', function($name="vutao")
// {
//     return view($name);
// });

// Route::get('/index', function () {
//     return view('index');
// })->name('index');

Route::get('/', function () {
    return view('index');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogdetails', function () {
    return view('blog-details');
});

