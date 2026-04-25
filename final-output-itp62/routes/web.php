<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AccountController::class, 'login']);

Route::post('/register', [AccountController::class, 'register']);

Route::post('/logout', [AccountController::class, 'logout']);

Route::get('/home', [UnitController::class, 'index']);

Route::get('/units/{slug}', [UnitController::class, 'info']);

Route::get('/units/{slug}/booking', [UnitController::class, 'booking']);

