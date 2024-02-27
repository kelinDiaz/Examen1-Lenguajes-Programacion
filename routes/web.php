<?php

use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VueloAsientoController;
use App\Http\Controllers\VueloController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



 
Route::get('/', [TipoAsientoController::class, 'inicio'] )->name('tipoAsiento.inicio');
Route::get('/tipoAsientos/home', [TipoAsientoController::class, 'index'] )->name('asiento.home');


Route::get('/tipoAsientos',[TipoAsientoController::class, 'agregar'] )->name('tipoAsiento.agregar');

Route::post('/tipoAsientos/agregar', [TipoAsientoController::class, 'guardar'] )->name('tipoAsiento.guardar');

Route::get('/vuelos', [VueloController::class, 'mostrar'] )->name('vuelos.mostrar');
 


