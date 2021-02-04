<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <a href="{{ route('foto') }}" class="btn btn-primary">Fotos</a>
      <a href="{{ route('multas') }}" class="btn btn-primary">Multas</a>
      <a href="{{ route('datos') }}" class="btn btn-primary">Datos</a>
    </div>
    <div class="container">
      @yield('seccion')
    </div>
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
      </thead>
      <tbody>
      
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
         
        </tr>
    
      </tbody>
    </table>
    <div>footer</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 