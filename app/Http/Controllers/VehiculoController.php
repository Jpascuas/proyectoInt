<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\VehiculoFormRequest;
use App\Vehiculo;
use Illuminate\Support\Facades\Redirect;

class VehiculoController extends Controller
{

    public function __construct()
        {
        $this->middleware('auth');
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos=Vehiculo::orderBy('id','DESC')->paginate(3);
        return view('vehiculo.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoFormRequest $request)
    {
        
        $vehiculos=new Vehiculo;
        $vehiculos->marca=$request->get('marca');
        $vehiculos->modelo=$request->get('modelo');
        $vehiculos->placa=$request->get('placa');
        $vehiculos->vin=$request->get('vin');
        $vehiculos->color=$request->get('color');
        $vehiculos->save();
        return Redirect::to('vehiculo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculos=Vehiculo::findOrFail($id);
        return view("vehiculo.edit",["vehiculos"=>$vehiculos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehiculos=Vehiculo::findOrFail($id);
        $vehiculos->marca=$request->get('marca');
        $vehiculos->modelo=$request->get('modelo');
        $vehiculos->placa=$request->get('placa');
        $vehiculos->vin=$request->get('vin');
        $vehiculos->color=$request->get('color');
        $vehiculos->update();
        return Redirect::to('vehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculos=Vehiculo::findOrFail($id);
        $vehiculos->delete();
        return Redirect::to('vehiculo');

    }
}
