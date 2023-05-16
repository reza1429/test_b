<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

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

Route::get('', function () {
    return view('dashboard');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('stok', [KendaraanController::class, 'index']);
Route::get('penjualan', [KendaraanController::class, 'penjualan']);
Route::get('stok/{id}/updatemotor', [KendaraanController::class, 'updatemotor'])->name('stok.updatemotor');
Route::get('stok/{id}/updatemobil', [KendaraanController::class, 'updatemobil'])->name('stok.updatemobil');
