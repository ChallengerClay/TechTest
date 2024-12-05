<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getIndex']);


Route::get('signup', [SignupController::class, 'getSignup']);
Route::post('signup', [SignupController::class, 'postSignup']);

Route::get('login', [LoginController::class, 'getLogin']);
Route::post('login', [LoginController::class, 'postLogin']);

Route::get('logout', [LoginController::class, 'getLogout']);

Route::resource('pizza', PizzaController::class);

