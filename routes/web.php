<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/pemesanan', [OrderController::class, 'create'])->name('order.create');
Route::post('/pemesanan', [OrderController::class, 'store'])->name('order.store');

Route::get('/pembayaran', [OrderController::class, 'index'])->name('content.pembayaran');



Route::get('/dashboard', function () {
    return 'Welcome to the Dashboard!';
})->middleware('auth');


Route::get('/laporan', [LaporanController::class, 'index'])->name('content.laporan');


Route::get('/dashboard', function () {
    return view('content.dashboard');
});


Route::get('/menu', function () {
    return view('content.daftarMenu');
});



Route::get('/profile', function () {
    return view('profile.profile');
});
