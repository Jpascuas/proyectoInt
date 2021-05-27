@extends('layouts.plantilla')
@section('contenido')
 <div class="row">
      <div class="col-md-8 col-xs-12">
          @include('vehiculo.search')
        </div>
        <div class="col-md-2">
             <a href="vehiculo/create" class="pull-right">
                  <button class="btn btn-success">Crear Vehiculo</button>
             </a>
        </div>
     </div>
     <h3>Reporte Todos Los Vehiculos <a href="\imprimirVehiculos">
     <button class="btn btn-success"><span class="glyphicon glyphicon-downloadalt"></span> Generar PDF</button></a></h3>

     <div class="row">
          <div class="col-md-12 col-xs-12">
               <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Placa</th>
                            <th>Vin</th>
                            <th>Color</th>
                            <th width="180">Opciones</th>
                        </thead>
                        <tbody>
                            @foreach($vehiculos as $vehiculo)
                            <tr>
               <td>{{ $vehiculo->id }}</td>
               <td>{{ $vehiculo->marca }}</td>
               <td>{{ $vehiculo->modelo }}</td>
               <td>{{ $vehiculo->placa }}</td>
               <td>{{ $vehiculo->vin }}</td>
               <td>{{ $vehiculo->color }}</td>
               <td>
              <a href="{{URL::action('VehiculoController@edit',$vehiculo->id)}}"><button class="btn btn-primary">Actualizar</button></a>
              <a href="" data-target="#modal-delete-{{$vehiculo->id}}" data-toggle="modal">
                 <button class="btn btn-danger">Eliminar</button>
                 </a>
                      </td>
                         </tr>
                         @include('vehiculo.modal')
                            @endforeach
                         </tbody>
                      </table>
                 </div>
                 {{$vehiculos->links()}}
            </div>
     </div>
@endsection