<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/boho_nook', function () {
    return view('boho_nook');
});

Route::get('boho_nook_info', function () {
    return view('boho_nook_info');
});

Route::get('booking', function () {
    return view('booking');
});

Route::get('downtown_oasis', function () {
    return view('downtown_oasis');
});

Route::get('downtown_oasis_info', function () {
    return view('downtown_oasis_info');
});

Route::get('unit', function () {
    return view('unit');
});

Route::get('vista_lounge', function () {
    return view('vista_lounge');
});

Route::get('vista_lounge_info', function () {
    return view('vista_lounge_info');
});