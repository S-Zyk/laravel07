<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



//Route::get('/', [\App\Http\Controllers\FirstController::class, 'index']);
//
//Route::get('/admin', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
//Route::get('/admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
//Route::get('/admin/categories/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])
//    ->name('categories.creat');
//Route::post('/admin/categories/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])
//    ->name('categories.store');
//Route::get('/admin/categories/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']);
//Route::put('/admin/categories/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);
//Route::delete('/admin/categories/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete']);
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/**
 * Product Routes
 */
Route::group(['prefix' => 'products'], function() {
    Route::get('/', [ProductsController::class,'index'])->name('products.index');
    Route::get('/create', [ProductsController::class,'create'])->name('products.create');
    Route::post('/store', [ProductsController::class,'store'])->name('products.store');
    Route::get('/{id}', [ProductsController::class,'edit'])->name('products.edit');
    Route::patch('/{id}', [ProductsController::class,'update'])->name('products.update');
    Route::delete('/{id}', [ProductsController::class,'destroy'])->name('products.destroy');
});

git status
