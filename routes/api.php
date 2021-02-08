<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultasController;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); 
});*/

Route::post('crear',[MultasController::class ,'store'])->name('crear.store');
//Route::post('crear',[MultasController::class ,'store'])->name('crear.store');
//Route::post('index',[MultasController::class ,'crear'])->name('patentes.crear');

/*Route::get('crear',[MultasController::class ,'crear'])->name('crear');
Route::post('crear',[MultasController::class ,'store'])->name('crear.store');
Route::get('editar',[MultasController::class, 'show'])->name('editar.show');
Route::get('editar/{id?}',[MultasController::class, 'datosMultas'])->name('editar');
Route::get('datos',[MultasController::class, 'datosVehiculos'])->name('datos');*/
Route::put('datos/{datos}', [MultasController::class, 'update'])->name('update');
Route::delete('datos/{datos}', [MultasController::class, 'eliminar'])->name('eliminar');