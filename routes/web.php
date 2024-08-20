<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,"home"]);
Route::get('/register',[AuthController::class,"signup"]);
Route::get('/welcome',[AuthController::class,"welcome"]);