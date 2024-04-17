<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticuloController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/articulos', [ArticuloController::class, 'index']); //mostrar todos los registros

Route::post('/articulos', [ArticuloController::class, 'store']); //crear un registro

Route::put('/articulos/{id}', [ArticuloController::class, 'update']); //actualizar un registro

Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy']); //eliminar un registro
