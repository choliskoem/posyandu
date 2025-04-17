<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::resource('anak', AnakController::class);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('orangtua', OrangtuaController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('anak', AnakController::class);
    Route::resource('user', UserController::class);

    Route::get('/pemeriksaan', [PemeriksaanController::class, 'index'])->name('pemeriksaan.index');
    Route::get('/pemeriksaan/create', [PemeriksaanController::class, 'create'])->name('pemeriksaan.create');
    Route::post('/pemeriksaan', [PemeriksaanController::class, 'store'])->name('pemeriksaan.store');

    Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian.index');
    Route::post('/antrian/{id}/hadir', [AntrianController::class, 'updateHadir'])->name('antrian.updateHadir');
    // Route::get('/pemeriksaan/create', [AntrianController::class, 'create'])->name('pemeriksaan.create');
    // Route::post('/pemeriksaan', [AntrianController::class, 'store'])->name('pemeriksaan.store');

    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
    Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');
    Route::post('/jadwal', [JadwalController::class, 'store'])->name('jadwal.store');
    Route::post('/jadwal/{id}/aktif', [JadwalController::class, 'updateAktif'])->name('jadwal.updateAktif');
    Route::post('/jadwal/{id}/nonaktif', [JadwalController::class, 'updateNonAktif'])->name('jadwal.updateNonAktif');

   

});
