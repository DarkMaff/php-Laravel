<!--<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fotos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h1>Galeria de fotos <?//= $numero ?></h1>forma primitiva con php*/
    <h1>Galeria de fotos // $numero }}  </h1>,con plantillas de blade
     
        <script src="" async defer></script>
    </body>
</html>-->
@extends('plantillaprincipal')
@section('title')
<title>Crear Datos!</title> 
@endsection
@section('seccion')
<H1>Crear Datos</H1>
<form action="{{route('patente.crear')}}" method="POST">
    @csrf
    <input type="text" name="patente" placeholder="agregar Patente" class="form-control mb2">
    <input type="text" name="vehiculo" placeholder="agregar Modelo de Vehiculo" class="form-control mb2">
    <input type="text" name="valor_permiso" placeholder="agregar Valor del Permiso" class="form-control mb2">
    <button class="btn btn-primary btn block" type="submit">Agregar</button>
    </form>
@endsection