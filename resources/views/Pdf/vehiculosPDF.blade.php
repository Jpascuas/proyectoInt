<!DOCTYPE html>
<html lang="es">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <title>Vehiculos | Sistema Web</title>
   </head><body>
     <div class="container">
       <h3 class="text-center">Reporte de Vehiculos</h3>
         <img src="" alt="" width='100px'>
       <br><br>
         <h1 class="text-center">TALLER JUAN Y CUELLAR</h1>
         <h3 class="text-center">NIT: 123456-1</h3>
         <h3 class="text-center">Tel. 3137683456</h3>
       <br> <br> <br>
         <table class="table table-bordered table-striped table-hover">
             <tr>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Placa</th>
              <th>Vin</th>
              <th>Color</th>
            </tr>
            @foreach($vehiculos as $veh)
             <tr> 
              <td>{{$veh->marca}}</td>
              <td>{{$veh->modelo}}</td>
              <td>{{$veh->placa}}</td>
              <td>{{$veh->vin}}</td>
              <td>{{$veh->color}}</td>
              </tr>
              @endforeach
          </table>
        <h5 class="text-center">Grupo 511 - Tecnología en Sistemas</h5>
        <h6>Software de Taller version 1</h6>
     </div>
   </body>
</html>