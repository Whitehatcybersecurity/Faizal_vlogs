<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage'])->name('home');
Route::get('/adminLogin', [App\Http\Controllers\AdminController::class, 'adminPage'])->name('admin');
Route::get('/adminLogin', [App\Http\Controllers\AdminController::class, 'adminPage'])->name('admin');