@extends('plantillaprincipal')

@section('title')
<title>Modificar</title> 
@endsection

@section('seccion')
<H1>Datos del Vehiculo a Modificar</H1>
<a href="">Modificar</a>
<form action="{{route('editar.show')}}" method="POST">
    @csrf
    <input type="text" name="patente" placeholder="agregar Patente" class="form-control mb2">
    <input type="text" name="vehiculo" placeholder="agregar Modelo de Vehiculo" class="form-control mb2">
    <input type="text" name="valor_permiso" placeholder="agregar Valor del Permiso" class="form-control mb2">
    <button class="btn btn-primary btn block" type="submit">Modificar</button>
    </form>
@endsection