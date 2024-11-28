<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/pemesanan', [OrderController::class, 'create'])->name('order.create');
Route::post('/pemesanan', [OrderController::class, 'store'])->name('order.store');
Route::get('/pembayaran', [OrderController::class, 'index'])->name('content.pembayaran');

// Route::resource('menu', MenuController::class);
Route::get('/menu', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
Route::get('/menus', [MenuController::class, 'index'])->name('content.daftarMenu');

Route::get('/dashboard', function () {
    return 'Welcome to the Dashboard!';
})->middleware('auth');


Route::get('/laporan', [LaporanController::class, 'index'])->name('content.laporan');


Route::get('/dashboard', function () {
    return view('content.dashboard');
});



Route::get('/profile', function () {
    return view('profile.profile');
});
