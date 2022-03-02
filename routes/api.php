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



Route::get('/tacos', [tacosController::class, 'mitaco'])->name('mitaquito');
Route::get('/refrescos', [refrescoController::class, 'mostrarrefrescos'])->name('refresquillo');
Route::post('/crearorden', [ordenController::class, 'store'])->name('ordenhecha');
Route::get('/orden', [ordenController::class, 'mostrartodo'])->name('miorden');
Route::post('/consultarorden/{orden}', [ordenController::class, 'show'])->name('ordenvista');
Route::put('/actualizarorden/{orden}', [ordenController::class, 'update'])->name('actualizarorden');
Route::delete('/eliminarorden/{orden}', [ordenController::class, 'destroy'])->name('elminarorden');
