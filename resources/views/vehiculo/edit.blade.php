@extends('layouts.plantilla')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Vehiculo</h3>
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
{{Form::open(array('action'=>array('VehiculoController@update', $vehiculos->id),'method'=>'patch'))}}
    <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group"> <br>
                    <label for="marca">Marca del vehiculo</label>
    <input type="text" name="marca" id="marca" class="form-control" value="{{$vehiculos->marca}}">
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group"> <br>
                    <label for="modelo">Modelo del vehiculo</label>
                    <input type="number" name="modelo" id="modelo" class="form-control" value="{{$vehiculos->modelo}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group"> <br>
 <label for="placa">Placa del Vehiculo</label>
 <input type="text" name="placa" id="placa" class="form-control" value="{{$vehiculos->placa}}">
 </div>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group"><br>
 <label for="vin">Numero de chasis del vehiculo</label>
 <input type="text" name="vin" id="vin" class="form-control" value="{{$vehiculos->vin}}">
 </div>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group"> <br>
 <label for="color">Color del vehiculo</label>
 <input type="text" name="color" id="color" class="form-control" value="{{$vehiculos->color}}">
 </div>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="form-group"> <br>
 <button class="btn btn-primary" type="submit"><span class="glyphicon glyphiconrefresh"></span> Actualizar </button>
 <a class="btn btn-info" type="reset" href="{{url('vehiculo')}}"><span class="glyphicon
glyphicon-home"></span> Regresar </a>
 </div>
 </div>
 </div>
 {!!Form::close()!!}
@endsection