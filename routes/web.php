<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Route::get('/',[HomeController::class,"home"]);
// Route::get('/register',[AuthController::class,"signup"]);
// Route::get('/welcome',[AuthController::class,"welcome"]);
// Route::get('/',[MovieController::class,"index"]);

Route::get('/',[DashboardController::class,"table"]);
Route::get('/tabledata',[DashboardController::class,"tabledata"]);

//TUGAS KE-15
Route::resource('/cast', CastController::class);