<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

// route group
Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function(){

    // admin
    Route::get('/',[AdminController::class,'index']);

    // category
    Route::get('category',[CategoryController::class,'index'])->name('categories.all'); // all create page show
    Route::get('category/create',[CategoryController::class,'create'])->name('categories.create'); // create page show
    Route::post('category',[CategoryController::class,'store'])->name('categories.store'); // create category
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit'); // edit page show
    Route::put('category/update/{id}',[CategoryController::class,'update'])->name('categories.update'); // update category
    Route::delete('category/delete/{id}',[CategoryController::class,'destroy'])->name('categories.destroy'); // delete category

    // product
    Route::resource('products',ProductController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//  Frontend
Route::get('/{path}', function () {
    return view('frontend.index');
})->where('path','.*');
