<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', [UnitController::class, 'index']);

Route::get('/units/{slug}', [UnitController::class, 'info']);

Route::get('/units/{slug}/booking', [UnitController::class, 'booking']);

