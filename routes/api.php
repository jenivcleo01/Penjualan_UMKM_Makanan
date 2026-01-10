<?php

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

Route::prefix('/pembayaran')->group(function() {
    Route::get('', [PembayaranController::class, 'index']);
    Route::post('', [PembayaranController::class, 'create']);
    Route::get('/{id}', [PembayaranController::class, 'detail']);
    Route::put('/{id}', [PembayaranController::class, 'update']);
    Route::patch('/{id}', [PembayaranController::class, 'patch']);
    Route::delete('/{id}', [PembayaranController::class, 'delete']);
});

Route::prefix('/products')->group(function() {
    Route::get('', [ProductController::class, 'index']);
    Route::post('', [ProductController::class, 'create']);
    Route::get('/{id}', [ProductController::class, 'detail']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::patch('/{id}', [ProductController::class, 'patch']);
    Route::delete('/{id}', [ProductController::class, 'delete']);
});

Route::prefix('/transaksi')->group(function() {
    Route::get('', [TransaksiController::class, 'index']);
    Route::post('', [TransaksiController::class, 'create']);
    Route::get('/{id}', [TransaksiController::class, 'detail']);
    Route::put('/{id}', [TransaksiController::class, 'update']);
    Route::patch('/{id}', [TransaksiController::class, 'patch']);
    Route::delete('/{id}', [TransaksiController::class, 'delete']);
});

Route::prefix('/users')->group(function() {
    Route::get('', [UsersController::class, 'index']);
    Route::post('', [UsersController::class, 'create']);
    Route::get('/{id}', [UsersController::class, 'detail']);
    Route::put('/{id}', [UsersController::class, 'update']);
    Route::patch('/{id}', [UsersController::class, 'patch']);
    Route::delete('/{id}', [UsersController::class, 'delete']);
});