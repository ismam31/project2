<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('content.login');
});

Route::get('/dashboard', function () {
    return view('content.dashboard');
});

Route::get('/pemesanan', function () {
    return view('content.pemesanan');
});

Route::get('/beranda', function () {
    return view('content.beranda');
});