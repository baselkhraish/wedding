<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['auth','CheckUserStatusMiddleware'])->name('admin.')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('index');

    // Category
    Route::resource('category', CategoryController::class);

    Route::get('/category-trash',[CategoryController::class,'trash'])->name('category.trash');
    Route::put('/{category}/category-restore',[CategoryController::class,'restore'])->name('category.restore');
    Route::delete('/{category}/category-forceDelete',[CategoryController::class,'forceDelete'])->name('category.forceDelete');

});

Route::get('/inactive', function () {
    return 'حسابك موقوف';
})->name('notactive');
