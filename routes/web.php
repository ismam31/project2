<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReportController;


Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/order', [OrderController::class, 'store'])->name('order.store');


Route::get('/pemesanan', [OrderController::class, 'create'])->name('order.create');
Route::post('/pemesanan', [OrderController::class, 'store'])->name('order.store');
Route::get('/pembayaran', [OrderController::class, 'index'])->name('content.pembayaran');
Route::delete('/pemesanan/{id}', [OrderController::class, 'destroy'])->name('order.destroy');

// Route::resource('menu', MenuController::class);
Route::get('/menu', [MenuController::class, 'create'])->name('menu.create');
Route::post('/menu', [MenuController::class, 'store'])->name('menu.store');
Route::get('/menus', [MenuController::class, 'index'])->name('content.daftarMenu');

Route::get('/menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
Route::get('/makanan', [MenuController::class, 'index'])->name('product.makanan');

Route::get('/makanan', [MenuController::class, 'getMakanan'])->name('product.makanan');
Route::get('/minuman', [MenuController::class, 'getMinuman'])->name('product.minuman');
Route::get('/snack', [MenuController::class, 'getSnack'])->name('product.snack');
Route::get('/kopi', [MenuController::class, 'getKopi'])->name('product.kopi');


Route::get('/report', [ReportController::class, 'index'])->name('reports.laporan');
Route::get('/laporan', [LaporanController::class, 'index'])->name('content.laporan');


Route::get('/dashboard', function () {
    return view('content.dashboard');
})->middleware('auth');


Route::get('/profile', function () {
    return view('profile.profile');
});
