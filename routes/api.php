<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MakulController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('mahasiswa')->group(function () {
        Route::post('create', [MahasiswaController::class, 'create']);
        Route::get('read', [MahasiswaController::class, 'read']);
        Route::put('update/{id}', [MahasiswaController::class, 'update']);
        Route::delete('delete/{id}', [MahasiswaController::class, 'delete']);
    });

    Route::prefix('dosen')->group(function () {
        Route::post('create', [DosenController::class, 'create']);
        Route::get('read', [DosenController::class, 'read']);
        Route::put('update/{id}', [DosenController::class, 'update']);
        Route::delete('delete/{id}', [DosenController::class, 'delete']);
    });

    Route::prefix('makul')->group(function () {
        Route::post('create', [MakulController::class, 'create']);
        Route::get('read', [MakulController::class, 'read']);
        Route::put('update/{id}', [MakulController::class, 'update']);
        Route::delete('delete/{id}', [MakulController::class, 'delete']);
    });
});
