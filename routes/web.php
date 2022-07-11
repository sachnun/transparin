<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAkunController;
use App\Http\Controllers\DashboardAuthController;
use App\Http\Controllers\DashboardBarangController;
use App\Http\Controllers\DashboardActivityController;
use App\Http\Controllers\DashboardPenerimaController;
use App\Http\Controllers\DashboardTrackController;
use App\Http\Controllers\DashboardValidasiController;
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPageController::class, 'index']);

// Route dashboard namespace
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('ringkasan');

    Route::get('/login', [DashboardAuthController::class, 'login'])->name('login');

    Route::prefix('bantuan')->group(function () {
        Route::resource('/barang', DashboardBarangController::class);
        Route::resource('/penerima', DashboardPenerimaController::class);
    });

    Route::resource('/track', DashboardTrackController::class);

    Route::prefix('validasi')->group(function () {
        Route::get('/permintaan', [DashboardValidasiController::class, 'permintaan'])->name('validasi.permintaan');
        Route::get('/terkirim', [DashboardValidasiController::class, 'terkirim'])->name('validasi.terkirim');
        Route::get('/batal', [DashboardValidasiController::class, 'batal'])->name('validasi.batal');
    });
    Route::resource('/validasi', DashboardValidasiController::class)
        ->only('store', 'update', 'destroy');

    Route::resource('/akun', DashboardAkunController::class);
    Route::get('/activity', [DashboardActivityController::class, 'index'])->name('activity');
});
