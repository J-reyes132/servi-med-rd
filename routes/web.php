<?php

use App\Http\Controllers\AplicacionController;
use App\Http\Controllers\ArquitecturaController;
use App\Http\Controllers\EvolucionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReferenciaController;
use App\Http\Controllers\TecnicaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/aplicacion', [AplicacionController::class, 'index'])->name('aplicacion.index');
Route::get('/Aquitectura', [ArquitecturaController::class, 'index'])->name('arquitectura.index');
Route::get('/evolucion', [EvolucionController::class, 'index'])->name('evolucion.index');
Route::get('/tecnica', [TecnicaController::class, 'index'])->name('tecnica.index');
Route::get('/referencias', [ReferenciaController::class, 'index'])->name('referencias.index');
