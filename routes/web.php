<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage'])->name('home');
Route::get('/home', [App\Http\Controllers\AdminController::class, 'adminHomePage'])->name('adminhome');
Route::post('/poster/store', [App\Http\Controllers\MainposterController::class, 'mainposterStore'])->name('mainposterstore');

//destination  
Route::get('/destinationView', [App\Http\Controllers\DestinationController::class, 'destinationView'])->name('destination');
Route::post('/destination/store', [App\Http\Controllers\DestinationController::class, 'destinationStore'])->name('destinationstore');
Route::get('/getdestinationdata', [App\Http\Controllers\DestinationController::class, 'getDestinationData'])->name('destinationdata');