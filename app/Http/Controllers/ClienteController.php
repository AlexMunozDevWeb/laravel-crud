<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes = Cliente::orderByDesc( 'id' )->get();
      return view( 'cliente.index', compact( 'clientes' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view( 'cliente.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {

      $request->validated();

      $cliente = new Cliente();
      $cliente->nombre = $request->nombre; 
      $cliente->NIF = $request->nif; 
      $cliente->poblacion = $request->poblacion; 
      $cliente->CP = $request->cp; 
      $cliente->fecha_alta = Carbon::now()->format('Y-m-d'); 
      $cliente->save();

      return redirect()->route( 'cliente.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente->id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
      $cliente = Cliente::find( $id );
      return view( 'cliente.edit', compact( 'cliente' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update( ClienteRequest $request, $id )
    {
      $datos = $request->validated();
      $cliente = Cliente::find( $id );

      $cliente->nombre = $datos['nombre']; 
      $cliente->NIF = $datos['nif']; 
      $cliente->poblacion = $datos['poblacion']; 
      $cliente->CP = $datos['cp']; 

      $cliente->save();

      return redirect()->route( 'cliente.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
      $cliente = Cliente::find( $id );
      $cliente->delete();
      return redirect()->route( 'cliente.index' );
    }
}
