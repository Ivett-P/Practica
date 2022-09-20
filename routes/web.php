<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('principal');
});

//productos
Route::get('/productos/registro',[ProductosController::class, 'create'])->name('productos.registro');
Route::post('/productos/guardar',[ProductosController::class, 'guardar'])->name('productos.guardar');
Route::get('/productos/list',[ProductosController::class, 'list'])->name('productos.list');
Route::get('/productos/editar/{iden}', [ProductosController::class, 'editar'])->name('productos.editar');
Route::put('/productos/update/{iden}',[ProductosController::class, 'update'])->name('productos.liupdatest');
