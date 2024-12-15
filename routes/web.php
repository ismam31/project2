<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserPesanController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemesananController;


Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/order', [UserPesanController::class, 'store'])->name('order.store');


Route::get('/pemesanan', [UserPesanController::class, 'create'])->name('order.create');
Route::post('/pemesanan', [UserPesanController::class, 'store'])->name('order.store');
Route::get('/pembayaran', [UserPesanController::class, 'index'])->name('content.pembayaran');
Route::delete('/pemesanan/{id}', [UserPesanController::class, 'destroy'])->name('order.destroy');

// Route::resource('menu', MenuController::class);
Route::resource('daftarMenu', MenuController::class);
Route::get('/daftarMenu', [MenuController::class, 'create'])->name('daftarMenu.create');
Route::post('/daftarMenu', [MenuController::class, 'store'])->name('daftarMenu.store');
Route::get('/daftarMenu{id}/edit', [MenuController::class, 'edit'])->name('daftarMenu.edit');
Route::delete('/daftarMenu{id}', [MenuController::class, 'destroy'])->name('daftarMenu.destroy');
Route::put('/daftarMenu/{id}', [MenuController::class, 'update'])->name('daftarMenu.update');
Route::get('/daftarMenu', [MenuController::class, 'index'])->name('daftarMenu.index');

Route::get('/menuss', [MenuController::class, 'menu'])->name('menus');
Route::post('/orders', [UserPesanController::class, 'store'])->name('orders.store'); // Untuk simpan pesanan
Route::get('/orders', [UserPesanController::class, 'index'])->name('orders.index'); // Untuk simpan pesanan


Route::get('/menu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/menu/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
Route::get('/makanan', [MenuController::class, 'index'])->name('product.makanan');

Route::get('/makanan', [MenuController::class, 'getMakanan'])->name('product.makanan');
Route::get('/minuman', [MenuController::class, 'getMinuman'])->name('product.minuman');
Route::get('/snack', [MenuController::class, 'getSnack'])->name('product.snack');
Route::get('/kopi', [MenuController::class, 'getKopi'])->name('product.kopi');


Route::get('/report', [ReportController::class, 'index'])->name('reports.laporan');
Route::get('/laporan', [LaporanController::class, 'index'])->name('content.laporan');

Route::get('/pemesanan/index', [PemesananController::class, 'getMakanan', 'getMinuman', 'getSnack', 'getKopi'])->name('pemesanan.index');
Route::post('/tambah-menu', [PemesananController::class, 'tambahMenu']);



Route::get('/dashboard', function () {
    return view('content.dashboard');
})->middleware('auth');




Route::resource('profiles', ProfileController::class);
