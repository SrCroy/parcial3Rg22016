<?php

use App\Http\Controllers\Ejercicio1;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Models\Proveedores;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductoController::class, 'index']);

Route::resource('producto', ProductoController::class);

Route::resource('ejercicio1', Ejercicio1::class);

Route::resource('proveedores', ProveedorController::class);
