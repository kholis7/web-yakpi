<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Controllers
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\LembagaController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\ZakatController;

/*
|--------------------------------------------------------------------------
| Website Route
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Dashboard Default Breeze
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Admin CMS Route
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings');

    Route::get('/lembaga', [LembagaController::class, 'index'])->name('admin.lembaga');

    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita');

    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('admin.prestasi');

    Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri');

    Route::get('/zakat', [ZakatController::class, 'index'])->name('admin.zakat');
});

/*
|--------------------------------------------------------------------------
| Profile Route
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
