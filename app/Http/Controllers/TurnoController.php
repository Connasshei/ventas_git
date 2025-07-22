<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos = Turno::all();
        return view('turnos.index', compact('turnos'));      //primero carpeta luego 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('turnos.create');
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
            'hora_entrada' => 'required',
            'hora_salida' => 'required',
            'dias_descanso' => 'required| string | max:100',
        ]);
        Turno::create($request->all());
        return redirect()->route('turnos.index')->with('success', 'Turno creado correctamente');
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
    public function edit(Turno $turno)
    {
        //
        return view('turnos.edit', compact('turno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turno $turno)
    {
        //
        $request->validate([
            'hora_entrada' => 'required',
            'hora_salida' => 'required',
            'dias_descanso' => 'required|string|max:100',
        ]);
        
        $turno->update($request->all());
        return redirect()->route('turnos.index')->with('success', 'Turno actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turno $turno)
    {
        //
        $turno->delete();
        return redirect()->route('turnos.index')->with('success', 'Turno eliminado correctamente');
    }
}
