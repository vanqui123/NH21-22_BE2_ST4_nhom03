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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\BookingAdminController;
use App\Http\Controllers\UserOrderAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\ProtypeAdminController;
use App\Http\Controllers\VoucherAdminController;
use App\Http\Controllers\VoucherUser;









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

Route::get('blog-single/{sid}',[BlogController::class,'get_detailBlog']);
Route::get('/',[ProductController::class,'getAllProduct'])->name('index');
Route::get('product-single/{product_id}',[ProductController::class,'getProductID']);
Route::get('shop',[ProtypeController::class,'getAllProductType'])->name('shop');
Route::get('shop/{type_id}',[ProtypeController::class,'getProductType_id']);
Route::get('load-cart-data', [CartController::class, 'cartCount']);
Route::get('cart', [CartController::class, 'cartList'])->middleware('isLogin')->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('cart/delete', [CartController::class, 'destroy'])->name('cart.delete');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('cart/updateDe', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
Route::get('cart/updateIn', [CartController::class, 'increaseQuantity'])->name('cart.increase');
//Admin
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');



//Contact
Route::post('contact', [ContactController::class, 'addToContact'])->name('contact.add');
Route::get('blog', [BlogController::class, 'getAllBlog']);

//Booking 
Route::get('product/booking', [ProductBookingController::class, 'store'])->name('product');
Route::get('checkout', [ProductBookingController::class, 'show']);

Route::get('/{name?}',[MainController::class,'navigation']);
 //User order
Route::post('checkout', [UserOrderAdminController::class, 'addUserOrder'])->name('user_order.add');

//Search func
Route::get('/search/key', [SearchController::class, 'search'])->name('search');


//Products/Protype ADMIN
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('productadmin',[ProductAdminController::class,'show'])->name('productadmin');
    Route::get('addproduct',[ProductAdminController::class,'add'])->name('addproduct');
    Route::post('addproduct',[ProductAdminController::class,'postAdd'])->name('postAdd');
    Route::get('edit/{id}',[ProductAdminController::class,'editProduct'])->name('editProduct');
    Route::post('update',[ProductAdminController::class,'postEdit'])->name('postEdit');
    Route::get('delete',[ProductAdminController::class,'deleteProduct'])->name('deleteProduct');
    Route::get('filter',[ProductAdminController::class,'getAllProtypes']);

    Route::get('protypeadmin',[ProtypeAdminController::class,'show'])->name('protypeadmin');
    Route::get('addprotype',[ProtypeAdminController::class,'add'])->name('addprotype');
    Route::post('addprotype',[ProtypeAdminController::class,'postAdd'])->name('postAddProtype');
    Route::get('edit/{id}',[ProtypeAdminController::class,'editProtype'])->name('editProduct');
    Route::post('update',[ProtypeAdminController::class,'postEdit'])->name('postEditProtype');
    Route::get('deleteprotype',[ProtypeAdminController::class,'deleteProtype'])->name('deleteProtype');


    




});




//Blog admin
Route::get('admin/blogadmin',[BlogAdminController::class,'show'])->name('show.blog');
Route::get('admin/addblog',[BlogAdminController::class,'add']);
Route::post('admin/blogadmin', [BlogAdminController::class, 'addblog'])->name('addblog.add');
Route::get('admin/addblog/delete',[BlogAdminController::class,'deleteBlog'])->name('blog.delete');
Route::get('admin/editblog',[BlogAdminController::class,'edit'])->name('blog.edit');
Route::post('admin/editblog/edit',[BlogAdminController::class,'editblog'])->name('blogedit.edit');
//Contact Admin 
Route::get('admin/contactadmin',[ContactAdminController::class,'show'])->name('show.contact');

//Voucher Admin
Route::get('admin/voucheradmin',[VoucherAdminController::class,'show'])->name('show.voucher');
Route::get('admin/addvoucher',[VoucherAdminController::class,'add']);
Route::post('admin/voucheradmin', [VoucherAdminController::class, 'addVoucher'])->name('voucher.add');
Route::get('admin/editvoucher',[VoucherAdminController::class,'edit'])->name('voucher.edit');
Route::post('admin/editvoucher/edit',[VoucherAdminController::class,'editVoucher'])->name('voucheredit.edit');
//Voucher User
Route::post('/cart/voucher', [ProductBookingController::class, 'show'])->name('voucher.adduser');



Route::get('admin/addvoucher/delete',[VoucherAdminController::class,'deleteVoucher'])->name('voucher.delete');


//Cart Admin
Route::get('admin/cartadmin',[UserOrderAdminController::class,'show'])->name('show.booking');




