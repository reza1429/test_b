<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('kendaraan/stok', [KendaraanController::class, 'getStokKendaraan']);
    Route::post('kendaraan', [KendaraanController::class, 'createKendaraan']);
    Route::get('kendaraan/penjualan', [KendaraanController::class, 'getPenjualanKendaraan']);
    Route::get('kendaraan/laporan', [KendaraanController::class, 'getLaporanPenjualanKendaraan']);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
