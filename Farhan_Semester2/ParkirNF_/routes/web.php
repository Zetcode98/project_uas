<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\ParkirController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('index');
})->name('index');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Admin
Route::get('/admin', [AdminController::class, 'admin'])->middleware(['auth', 'verified'])->name('admin');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Area Parkir Routes
Route::prefix('areaparkir')->name('areaparkir.')->group(function () {
    Route::get('index', [AreaParkirController::class, 'index'])->name('index');
    Route::get('{id}/view', [AreaParkirController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [AreaParkirController::class, 'create'])->name('create');
        Route::post('store', [AreaParkirController::class, 'store'])->name('store');
        Route::get('{id}/edit', [AreaParkirController::class, 'edit'])->name('edit');
        Route::delete('{id}', [AreaParkirController::class, 'destroy'])->name('destroy');
    });
});

// Parkir Routes
Route::prefix('parkir')->name('parkir.')->group(function () {
    Route::get('index', [ParkirController::class, 'index'])->name('index');
    Route::get('create', [ParkirController::class, 'create'])->name('create');
    Route::post('store', [ParkirController::class, 'store'])->name('store');
    Route::get('{id}/view', [ParkirController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('{id}/edit', [ParkirController::class, 'edit'])->name('edit');
        Route::delete('{id}', [ParkirController::class, 'destroy'])->name('destroy');
    });
});

// Jenis Routes
Route::prefix('jenis')->name('jenis.')->group(function () {
    Route::get('index', [JenisController::class, 'index'])->name('index');
    Route::get('{id}/view', [JenisController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [JenisController::class, 'create'])->name('create');
        Route::post('store', [JenisController::class, 'store'])->name('store');
        Route::get('{id}/edit', [JenisController::class, 'edit'])->name('edit');
        Route::delete('{id}', [JenisController::class, 'destroy'])->name('destroy');
    });
});

// Transaksi Routes
Route::prefix('transaksi')->name('transaksi.')->group(function () {
    Route::get('index', [TransaksiController::class, 'index'])->name('index');
    Route::get('{id}/view', [TransaksiController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [TransaksiController::class, 'create'])->name('create');
        Route::post('store', [TransaksiController::class, 'store'])->name('store');
        Route::get('{id}/edit', [TransaksiController::class, 'edit'])->name('edit');
        Route::delete('{id}', [TransaksiController::class, 'destroy'])->name('destroy');
    });
});

// Kendaraan Routes
Route::prefix('kendaraan')->name('kendaraan.')->group(function () {
    Route::get('index', [KendaraanController::class, 'index'])->name('index');
    Route::get('{id}/view', [KendaraanController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [KendaraanController::class, 'create'])->name('create');
        Route::post('store', [KendaraanController::class, 'store'])->name('store');
        Route::get('{id}/edit', [KendaraanController::class, 'edit'])->name('edit');
        Route::delete('{id}', [KendaraanController::class, 'destroy'])->name('destroy');
    });
});

// Kampus Routes
Route::prefix('kampus')->name('kampus.')->group(function () {
    Route::get('index', [KampusController::class, 'index'])->name('index');
    Route::get('{id}/view', [KampusController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [KampusController::class, 'create'])->name('create');
        Route::post('store', [KampusController::class, 'store'])->name('store');
        Route::get('{id}/edit', [KampusController::class, 'edit'])->name('edit');
        Route::delete('{id}', [KampusController::class, 'destroy'])->name('destroy');
    });
});
