<?php

use App\Http\Controllers\MultasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Models;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

Route::get('/', PagesController::class);// invoco al controlador para que me traiga la ruta de una forma mas eficas en laravel 8
Route::get('crear',[MultasController::class ,'crear'])->name('crear');
Route::get('editar',[MultasController::class, 'show'])->name('editar.show');
Route::get('editar/{id?}',[MultasController::class, 'datosMultas'])->name('editar');
Route::get('datos',[MultasController::class, 'datosVehiculos'])->name('datos');
