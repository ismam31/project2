<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
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

use App\Http\Controllers\LaporanController;

Route::get('/laporan', [LaporanController::class, 'index'])->name('content.laporan');


Route::get('/profile', function () {
    return view('profile.profile');
});
