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

Route::get('/pembayaran', function () {
    return view('content.pembayaran');
});

Route::get('/menu', function () {
    return view('content.daftarMenu');
});

Route::get('/laporan', function () {
    return view('content.laporan');
});

Route::get('/profile', function () {
    return view('profile.profile');
});