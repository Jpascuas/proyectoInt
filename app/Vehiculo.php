<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    protected $fillable = ['marca','modelo', 'placa', 'vin', 'color' ];
    
    //Relacion con la tabla Ingreso_vehiculo 
    public function ingreso_vehiculo()
    {
    return $this->hasMany('App\Igresovehiculo');
    } 
}
