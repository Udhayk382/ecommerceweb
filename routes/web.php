<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});

Route::get('login/index', [CustomerController::class, 'index']);
Route::get('login/create', [CustomerController::class, 'login']);


