<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/pegawai', [AreaParkirController::class, 'show'])->name('areaparkir');
Route::get('/pasien', [JenisController::class, 'show'])->name('jenis');
Route::get('/kelurahan', [KampusController::class, 'show'])->name('kampus');
Route::get('/kategori', [KendaraanController::class, 'show'])->name('kendaraan');
Route::get('/paramedik', [TransaksiController::class, 'show'])->name('transaksi');