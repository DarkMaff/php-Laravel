<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model;


class PagesController extends Controller
{
    public function inicio(){
        return view("welcome");
    }

    public function galerias(){
        return view('fotos');       
    }

    public function datosMultas(){
        return view('multas');
    }
    public function datosVehiculos(){
        $datos = App/Vehiculos::all();
        return view('datos',compact('datos'));
    }
    
}
