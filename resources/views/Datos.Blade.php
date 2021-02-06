@extends('plantillaprincipal')
@section('title')
<title>Datos</title> 
@endsection
@section('seccion')
<H1>Consulta de Datos</H1>
@endsection

@section('tabla')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">PATENTE</th>
        <th scope="col">VEHICULO</th>
        <th scope="col">VALOR PERMISO</th>
        <th scope="col">INTERESES Y REAJUSTES</th>
        <th scope="col">REGISTRO DE MULTAS IMPAGAS</th>
        <th scope="col">SUBTOTAL</th>
      </tr>

      @foreach ($datos as $item)
<tr>
  <th scope="row">{{$item->id}}</th>
  <td>{{$item->patente}}</td>
  <td>{{$item->vehiculo}}</td>
  <td>{{$item->valor_permiso}}</td>
  <td>{{$item->intereses_ajustes}}</td>
  <td>{{$item->multas_impagas}}</td>
  <td>{{$item->subtotal}}</td>
  
</tr>
@endforeach
</thead>
</table>
@endsection
