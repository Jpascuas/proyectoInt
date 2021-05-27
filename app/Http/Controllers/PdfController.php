<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PdfController extends Controller
{
    public function imprimirvehiculos(Request $request)
{
 $vehiculos = DB::table('vehiculos as veh')
->select 
('veh.marca','veh.modelo','veh.placa','veh.vin','veh.color')
->get();
$pdf = \PDF::loadView('Pdf.vehiculosPDF',['vehiculos' => $vehiculos ]);
$pdf->setPaper('carta', 'A4');
 return $pdf->download('Listado de Vehiculos.pdf');
}
}
