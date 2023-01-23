<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Tarjetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TarjetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'numero_tarjeta' =>  'required|in:16',
        'fecha_vencimiento' => 'required|',
        'CVV' => 'required|in:3',
        ]);
    }

    public function crearTarjeta(Request $request)
    {
        $usuario = User::find(Auth::id());
        $fecha_vencimiento = $request->input('fecha_vencimiento');
        $fechaString = (new DateTime($fecha_vencimiento))->format('d/m/Y');
        $numero_tarjeta = $request->input('numero_tarjeta');
        $CVV = $request->input('CVV');

        $tarjeta = new Tarjetas;
        $tarjeta->id_users = $usuario->id;
        $tarjeta->numero_tarjeta = $numero_tarjeta;
        $tarjeta->fecha_vencimiento = $fechaString;
        $tarjeta->cvv = $CVV;
        $tarjeta->save();
    
        Session::flash("mensaje", "Su tarjeta se ha registrado correctamente");
        return view('pagos');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}