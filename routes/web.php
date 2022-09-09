<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pegawai', PegawaiController::class);
Route::resource('/provinsi', ProvinsiController::class);
Route::resource('/kecamatan', KecamatanController::class);
Route::get('/kecamatan/edit/{id}', [KecamatanController::class, 'edit']);
Route::get('/kecamatan/delete/{id}', [KecamatanController::class, 'destroy']);
Route::resource('/kelurahan', KelurahanController::class);
Route::get('/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
Route::get('/kelurahan/delete/{id}', [KelurahanController::class, 'destroy']);
