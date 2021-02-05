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
/* La ruta original
Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', PagesController::class);// invoco al controlador para que me traiga la ruta de una forma mas eficas en laravel 8

/*Route::get('fotos', function() {
    return 'estas en la ruta fotos';
});*/ //la funcion mas basica de la ruta 

/*Route::get('fotos/{numero?}', function($numero = 'sin numero') { // numero?es un parametro que pregunta si no hay un nombre que opere igual con la funcion y arroje un resultado
    return 'Estas en la galeria de fotos '.$numero; // .$numero busca el indice o nombre del archivo
})->where('numero','[0-9]+');*/ //es una condicional y validamos que la entrada sea solo numeros

//Route::view('galerias','fotos',['numero'=> 125])->name('foto'); //la misma ruta de arriba pero acortada con view

/*Route::get('galerias', function() { //ruta original de fotos 
    return view('fotos');
})->name('foto');*/

//Route::get('galerias', 'PagesController@galerias')->name('foto');// le damos un nombre para ubicarlo mejor en los href y lo reubicamos al controlador PageController
Route::get('index',[MultasController::class ,'index'])->name('index');

/*Route::get('multas', function () {
    return view('multas');
})->name('multas');*/

Route::get('multas',[MultasController::class, 'datosMultas'])->name('multas');

/*Route::get('datos', function () {
    return view('datos');
})->name('datos');*/

Route::get('datos',[MultasController::class, 'datosVehiculos'])->name('datos');