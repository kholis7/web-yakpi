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

/*
|--------------------------------------------------------------------------
| Admin CMS Route
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/lembaga', function () {
        return view('admin.lembaga.index');
    })->name('lembaga.index');

    Route::get('/berita', function () {
        return view('admin.berita.index');
    })->name('berita.index');

    Route::get('/prestasi', function () {
        return view('admin.prestasi.index');
    })->name('prestasi.index');

    Route::get('/galeri', function () {
        return view('admin.galeri.index');
    })->name('galeri.index');

    Route::get('/zakat', function () {
        return view('admin.zakat.index');
    })->name('zakat.index');

    Route::get('/settings', function () {
        return view('admin.settings.index');
    })->name('setting.index');
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
