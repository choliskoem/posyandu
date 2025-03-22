<?php


use App\Http\Controllers\API\ApiAuthController;
use App\Http\Controllers\ApiAntrianController;
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


use App\Http\Controllers\API\AuthController;

Route::post('/login', [ApiAuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [ApiAuthController::class, 'logout']);
Route::post('/antrian', [ApiAntrianController::class, 'store']);
Route::get('/antrian/{nomor_antrian}', [ApiAntrianController::class, 'show']);
