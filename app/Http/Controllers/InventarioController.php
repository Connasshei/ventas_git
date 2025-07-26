<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventarios = Inventario::all();
        return view('inventarios.index', compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventarios.create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'producto' => 'required|string|max:100',
            'stock_actual' => 'required|integer',
            'stock_minimo' => 'required|integer',
            'precio' => 'required|decimal(8,2)',
        ]);
        Inventario::create($request->all());
        return redirect()->route('inventarios.index')->with('success', 'Inventario actualizado correctamente');

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
    public function edit(Cliente $cliente)
    {
        //
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
        $request->validate([
            'producto' => 'required|string|max:100',
            'stock_actual' => 'required|integer',
            'stock_minimo' => 'required|integer',
            'precio' => 'required|decimal(8,2)',
        ]);
        $inventario->create($request->all());
        return redirect()->route('inventarios.index')->with('success', 'Inventario actualizado correctamente');

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
        $inventario->delete();
        return redirect()->route('inventarios.index')->with('success', 'Objeto de inventario eliminado correctamente');
    }
}
