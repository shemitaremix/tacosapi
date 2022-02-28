<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tacosController;
use App\Http\Controllers\refrescoController;
use App\Http\Controllers\ordenController;

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



Route::post('/tacos', [tacosController::class, 'mitaco'])->name('mitaquito');
Route::post('/refrescos', [refrescoController::class, 'mostrarrefrescos'])->name('refresquillo');
Route::post('/orden', [ordenController::class, 'store'])->name('ordenhecha');
Route::post('/orden/{orden}', [ordenController::class, 'show'])->name('ordenvista');
Route::put('/orden/{orden}', [ordenController::class, 'update'])->name('ordenvista');