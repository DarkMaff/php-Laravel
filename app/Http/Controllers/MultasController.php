<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\datos_vehiculos;
use Illuminate\Support\Facades\Route;

class MultasController extends Controller
{
    public function index(){
        return view('Crear');       
    }
    public function crear(request $request){
       $datos = new datos_vehiculos;
       $datos->patente = $request->patente;
       $datos->vehiculo = $request->vehiculo;
       $datos->valor_permiso = $request->valor_permiso;
       $datos->save();
      return redirect('index');
    }

    public function datosMultas(){
        return view('multas');
    }
    public function datosVehiculos(){
        $datos = datos_vehiculos::all();
        return view('datos',compact('datos'));
        //return $datos->toArray();
    }
}
