<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\datos_vehiculos;
use Illuminate\Support\Facades\Route;

class MultasController extends Controller
{
    public function crear(){
        return view('crear');       
    }
    public function store(request $request){

        $request->validate([
            'patente'=>'required',
            'vehiculo'=>'required',
            'valor_permiso'=>'required'

        ]);

       $datos = new datos_vehiculos;
       $datos->patente = $request->patente;
       $datos->vehiculo = $request->vehiculo;
       $datos->valor_permiso = $request->valor_permiso;
       $datos->save();
       
       //$datos = json_decode(array());
       //return $datos;
       //$datos = $request->input('datos');
      return redirect()->route('datos',$datos);
    }

    public function show($id){
        $id = datos_vehiculos::findOrFail($id);
        //return view('editar.show',compact('id'));
        return redirect()->route('editar.show',$id);
    }   

    public function datosMultas(datos_vehiculos $id){
        return view('editar',$id);
        //return $id;
    }

    public function datosVehiculos(){
        $datos = datos_vehiculos::paginate();
        return view('datos',compact('datos'));
        //return $datos->toArray();
    }

    public function update(request $request, datos_vehiculos $datos){
        
        $datos->patente = $request->patente;
        $datos->vehiculo = $request->vehiculo;
        $datos->valor_permiso = $request->valor_permiso;
        $datos->save();
       return redirect()->route('editar',$datos);   
       //return $datos;

    }

    public function eliminar($id){
        $id = datos_vehiculos::findOrFail($id);
        $id->delete();
        return redirect()->route('datos');
    }

}
