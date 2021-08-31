<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Session\Facades\Store;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = Cliente::latest()->get();
        return view('cliente.index', [
            'cliente' => $datos,
        ]);
        // $datos['Cliente']=Cliente::paginate(5);
        // return view('cliente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'Nit' => ['required'],
        //     'Nombres' => ['required'],
        //     'Apellidos' => ['required'],
        //     'Razonsocial' => ['required'],
        //     'Tipodocumento' => ['required'],
        //     'Numerodocumento' => ['required'],
        //     'Correo' => ['required'],
        //     'Celular' => ['required'],
        //     'Foto' => ['required'],
        // ]);

        $datosCliente = request()->except('_token');

        if ($request->hasfile('foto')) {
            $datosCliente['foto']=$request->file('foto')->store('uploads','public');
        } 
        Cliente::create($datosCliente);
        return redirect()->route('cliente.index')
        ->with('mensaje', 'Cliente agregado correctamente');
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
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    { 
        return view('cliente.edit', compact('cliente'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
        
        $datosCliente = request()->except('_token');
        
        
        // if ($request->hasfile('foto')) {
            
        //     // $cliente=Cliente::findOrFail($cliente);
            
        //     // storage::delete('public/'.$cliente->foto);

        //     $datosCliente['foto']=$request->file('foto')->store('uploads','public');
        // } 
        
        $cliente->update($request->all());

        return redirect()->route('cliente.index')
            ->with('mensaje', 'Cliente agregado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Cliente $cliente)
    {
        //
        $cliente->update($request->all());
        // if (Storage::delete('public/'.$cliente->foto)) {
            
        // }
        $cliente->delete();
        return redirect()->route('cliente.index')->with('mensaje','Eliminado correctamente');
    }
}
