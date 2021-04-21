<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

// admin

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/admin',[AdminController::class,'index']);

//  laravel welcome
Route::get('/', function () {
    return view('welcome');
});
