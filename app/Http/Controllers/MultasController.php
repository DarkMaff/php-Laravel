<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultasController extends Controller
{
    public function index(){
        return view('fotos');       
    }

    public function datosMultas(){
        return view('multas');
    }
    public function datosVehiculos(){
        //$datos = datos_vehiculos::all();
       // $users = DB::select('select * from users');
        //return view('datos',compact('datos'));
        return view('Datos');
    }
}
