<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\VendorController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['auth','CheckUserStatusMiddleware'])->name('admin.')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('index');

    // Category
    Route::resource('category', CategoryController::class);

    Route::get('/category-trash',[CategoryController::class,'trash'])->name('category.trash');
    Route::put('/{category}/category-restore',[CategoryController::class,'restore'])->name('category.restore');
    Route::delete('/{category}/category-forceDelete',[CategoryController::class,'forceDelete'])->name('category.forceDelete');

    // Vendor
    Route::resource('vendor', VendorController::class);

    // Note
    Route::get('/notes',[AdminController::class,'note'])->name('note');

    // Product
    Route::resource('product',ProductController::class);

    Route::get('/product-trash',[ProductController::class,'trash'])->name('product.trash');
    Route::put('/{product}/product-restore',[ProductController::class,'restore'])->name('product.restore');
    Route::delete('/{product}/product-forceDelete',[ProductController::class,'forceDelete'])->name('product.forceDelete');


    // Setting
    Route::resource('setting', SettingController::class);
    Route::put('/{setting}/update2',[SettingController::class,'setting'])->name('setting.update2');

});

Route::get('/inactive', function () {
    return 'حسابك موقوف';
})->name('notactive');
