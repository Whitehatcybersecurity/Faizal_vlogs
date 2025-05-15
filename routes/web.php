<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage'])->name('home');
Route::get('/home', [App\Http\Controllers\AdminController::class, 'adminHomePage'])->name('adminhome');
Route::post('/poster/store', [App\Http\Controllers\MainposterController::class, 'mainposterStore'])->name('mainposterstore');