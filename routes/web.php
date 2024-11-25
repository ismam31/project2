<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return 'Welcome to the Dashboard!';
})->middleware('auth');


Route::get('/laporan', [LaporanController::class, 'index'])->name('content.laporan');


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



Route::get('/profile', function () {
    return view('profile.profile');
});
