<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps = false;
    protected $fillable = ['marca', 'modelo', 'placa', 'vin', 'color'];
}
