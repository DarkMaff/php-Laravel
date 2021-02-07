@extends('plantillaprincipal')

@section('title')
<title>Modificar</title> 
@endsection

@section('seccion')
<H1>Datos del Vehiculo a Modificar</H1>
<a href="">Modificar</a>
<form action="{{route('update',$id)}}" method="POST">
    @csrf
    
    <input type="text" name="patente" value="{{$patente}}" class="form-control mb2">
    <input type="text" name="vehiculo" value="{{$vehiculo}}" class="form-control mb2">
    <input type="text" name="valor_permiso" value="{{$valor_permiso}}" class="form-control mb2">
    <button class="btn btn-primary btn block" type="submit">Modificar</button>
    </form>
@endsection