<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\site\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[SiteController::class,'index'])->name('home');

// Category
Route::get('/category',[SiteController::class,'category'])->name('category');
Route::get('/category/product/{product}',[SiteController::class,'category_product'])->name('category.product');
Route::get('/category/vendor/{vendor}',[SiteController::class,'category_vendor'])->name('category.vendor');

//Vendor
Route::get('/vendor',[SiteController::class,'vendor'])->name('vendor');
Route::get('/vendor/product/{product}',[SiteController::class,'vendor_product'])->name('vendor.product');

Route::get('/products',[SiteController::class,'products'])->name('products');

Route::get('/product/{product}',[SiteController::class,'product_details'])->name('product_details');

// Reservation
Route::post('/reservation',[SiteController::class,'reservation'])->name('reservation')->middleware('auth');




require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
