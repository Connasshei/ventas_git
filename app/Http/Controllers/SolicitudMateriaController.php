<?php

namespace App\Http\Controllers;

use App\Models\Solicitud_Materia;
use Illuminate\Http\Request;

class SolicitudMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $solicitud_materias = Solicitud_Materia::with('estudiante')->get();
        return view('solicitud_materias.index', compact('solicitud_materias')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('solicitud_materias.create');
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
            'id_estudiante' => 'integer|exists:estudiantes,id',
            'codigo_materia' => 'string',
            'nombre_materia' => 'string',
            'grupo' => 'string',
            
            'docente' => 'string',
            'semestre' => 'string',
            'turno' => 'string',
            'fecha_solicitud' => 'date',
            'motivo' => 'string',
            'estado' => 'string',
            'observaciones' => 'string',
        ]);
        Solicitud_Materia::create($request->all());
        return redirect()->route('solicitud_materias.index')->with('success', 'Solicitud registrada correctamente');
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
    public function edit(Solicitud_Materia $solicitud_materia)
    {
        //
        return view('solicitud_materias.edit' ,compact('solicitud_materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud_Materia $solicitud_materia)
    {
        //
        $request->validate([
            'id_estudiante' => 'integer|exists:estudiantes,id',
            'codigo_materia' => 'string',
            'nombre_materia' => 'string',
            'grupo' => 'string',
            
            'docente' => 'string',
            'semestre' => 'string',
            'turno' => 'string',
            'fecha_solicitud' => 'date',
            'motivo' => 'string',
            'estado' => 'string',
            'observaciones' => 'string',
        ]);
        $solicitud_materia->update($request->all());
        return redirect()->route('solicitud_materias.index')->with('success', 'Solicitud actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud_Materia $solicitud_materia)
    {
        //
        solicitud_materia->delete();
        return redirect()->route('solicitud_materias.index')->with('success', 'Solicitud eliminada correctamente');

    }
}
