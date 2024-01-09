<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::put('/pegawai/{pegawai}', [PegawaiController::class, 'update']);
Route::delete('/pegawai/{pegawai}', [PegawaiController::class, 'destroy']);
