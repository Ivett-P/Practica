<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('principal');
});

//productos
Route::get('/productos/registro',[ProductosController::class, 'create'])->name('productos.registro');