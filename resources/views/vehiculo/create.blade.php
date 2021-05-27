@extends('layouts.plantilla')
@section('contenido')
 <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <h3>Registrar vehiculo</h3>
             @if (count($errors)>0)
         <div class="alert alert-danger">
              <ul>
                 @foreach ($errors->all() as $error)
                 <li>{{$error}}</li>
                 @endforeach
                 </ul>
              </div>
              @endif
         </div>
     </div>
 {!!Form::open(array('url'=>'vehiculo','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="form-group">
                    <br>
                 <label for="marca">Marca del vehiculo</label>
<input type="text" name="marca" id="marca" class="form-control" placeholder= "Escriba la marca del vehiculo">
            </div> </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="form-group">
                      <br>
                 <label for="modelo">Modelo del vehiculo</label>
<input type="number" name="modelo" id="modelo" class="form-control" placeholder="Escriba modelo del vehiculo">
            </div> </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="form-group">
                    <br>
                 <label for="placa">Placa del vehiculo</label>
<input type="text" name="placa" id="placa" class="form-control" placeholder="Escriba placa del vehiculo">
               </div> </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="form-group">
                    <br> 
                 <label for="vin">Vin del vehiculo</label>
 <input type="text" name="vin" id="vin" class="form-control" placeholder="Digite el numero de chasis de vehiculo">
                </div> </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="form-group">
                    <br>
                 <label for="color">Color del vehiculo</label>
<input type="text" name="color" id="color" class="form-control" placeholder="Rscriba el color del vehiculo">
               </div> </div>       
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="form-group"> 
                    <br>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span>
Guardar</button>
<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar
Campos</button>
<a class="btn btn-info" type="reset" href="{{url('vehiculo')}}"><span class="glyphicon glyphicon
home"></span> Regresar </a>
                </div>
            </div>
         </div>
   {!!Form::close()!!}
@endsection