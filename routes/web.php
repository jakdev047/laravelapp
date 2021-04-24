<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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
Route::post('/admin/category',[CategoryController::class,'store'])->name('categories.store');

//  laravel welcome
Route::get('/', function () {
    return view('welcome');
});
