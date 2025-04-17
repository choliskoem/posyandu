<?php

use App\Http\Controllers\API\ApiAntrianController;
use App\Http\Controllers\API\ApiAuthController;
use App\Http\Controllers\ApiPemeriksaanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/login', [ApiAuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [ApiAuthController::class, 'logout']);
Route::post('/antrian', [ApiAntrianController::class, 'store']);
Route::get('/antrian/{nomor_antrian}', [ApiAntrianController::class, 'show']);
Route::get('/jadwal', [ApiAntrianController::class, 'getJadwal']);
Route::get('/anak/{id_orang_tua}', [ApiAntrianController::class, 'getAnakByOrangTua']);
Route::get('pemeriksaan/{id_orang_tua}', [ApiPemeriksaanController::class, 'showByIdOrangTua']);

