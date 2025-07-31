<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiantes.create');
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
            'nombres' => 'string',
            'apellidos' => 'string',
            'ci' => 'integer',
            'correo' => 'email',
            'telefono' => 'string',
            'direccion' => 'string',
            'fecha_nacimiento' => 'date',
            'genero' => 'string',
            'carrera' => 'string',
            'fecha_ingreso' => 'date',
            'estado' => 'string',
        ]);
        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante registrado correctamente');
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
    public function edit(Estudiante $estudiante)
    {
        //
        return view('estudiantes.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        //
        $request->validate([
            'nombres' => 'string',
            'apellidos' => 'string',
            'ci' => 'integer',
            'correo' => 'email' ,
            'telefono' => 'string',
            'direccion' => 'string',
            'fecha_nacimiento' => 'date',
            'genero' => 'string',
            'carrera' => 'string',
            'fecha_ingreso' => 'date',
            'estado' => 'string',
        ]);
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente');
    }
}
