<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

// admin

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/admin',[AdminController::class,'index']);

// category
Route::get('/admin/category',[CategoryController::class,'index'])->name('categories.all'); 
// all create page show
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('categories.create'); // create page show
Route::post('/admin/category',[CategoryController::class,'store'])->name('categories.store'); // create category
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit'); // edit page show
Route::put('/admin/category/update/{id}',[CategoryController::class,'update'])->name('categories.update'); // update category
Route::delete('/admin/category/delete/{id}',[CategoryController::class,'destroy'])->name('categories.destroy'); // delete category

// product
Route::resource('admin/products',ProductController::class);

//  laravel welcome
Route::get('/', function () {
    return view('welcome');
});
