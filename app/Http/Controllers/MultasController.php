<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\datos_vehiculos;

class MultasController extends Controller
{
    public function index(){
        return view('fotos');       
    }

    public function datosMultas(){
        return view('multas');
    }
    public function datosVehiculos(){
        $datos = datos_vehiculos::all();
       // $datos = DB::select('select * from users');
        return view('datos',compact('datos'));
        //return $datos->toArray();
    }
}
