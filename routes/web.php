<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::view('/dashboard', 'welcome')->name('dashboard.index');

// Route::namespace('Admin')->group(function(){
    Route::resource('products',  ProductController::class);
// });