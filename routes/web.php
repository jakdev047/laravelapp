<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

// admin

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('categories.create');

//  laravel welcome
Route::get('/', function () {
    return view('welcome');
});
