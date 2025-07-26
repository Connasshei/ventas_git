<?php

namespace App\Http\Controllers;


use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('empleados.create');
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
            'ci' => 'required',
            'nombre_completo' => 'required',
            'email' => 'required | string ',
            'rol' => 'required | string',
            'id_turno' => 'required|integer|exists:turnos,id',
        ]);
        Empleado::create($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado creado correctamente');
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
    public function edit(Empleado $empleado)
    {
        //
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
        $request->validate([
            'ci' => 'required',
            'nombre_completo' => 'required',
            'email' => 'required| string',
            'rol' => 'required | string',
            'id_turno' => 'required|integer|exists:turnos,id',
        ]);
        
        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado correctamente');
    }
}
