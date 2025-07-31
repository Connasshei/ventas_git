@extends('adminlte::page')

@section('title', isset ($detalle_pedido) ? 'Editar Detalle' : 'Crear Detalle')

@section('content_header')
    <h1>{{isset($detalle_pedido)? 'Editar Detalle' : 'Crear Detalle'}}</h1>
@stop
@section('content')
<form action="{{ isset($solicitud_materia) ? route('solicitud_materias.update', $solicitud_materia) : route('solicitud_materias.store') }}" method="POST">
    @csrf
    @if(isset($solicitud_materia))
        @method('PUT')
    @endif
    <div class="container">
        <div class="row">

            <div class="form-group col-lg-4 col-sm-6">
                <label>ID Estudiante</label>
                <input type="text" name="id_estudiante" class="form-control" value="{{ old('id_estudiante', $solicitud_materia->id_estudiante ?? '') }}" required>
            </div>

            <div class="form-group col-lg-4 col-sm-6">
                <label>Codigo Materia</label>
                <input type="text" name="codigo_materia" class="form-control" value="{{ old('codigo_materia', $solicitud_materia->codigo_materia ?? '') }}" required>
            </div>

            <div class="form-group col-lg-2 col-sm-6">
                <label>Nombre Materia</label>
                <input type="text" name="nombre_materia" class="form-control" value="{{ old('nombre_materia', $solicitud_materia->nombre_materia ?? '') }}" required>
            </div>

            <div class="form-group col-lg-2 col-sm-6">
                <label>Grupo</label>
                <input type="text" name="grupo" class="form-control" value="{{ old('grupo', $solicitud_materia->grupo ?? '') }}" required>
            </div>
            <div class="form-group col-lg-4 col-sm-6">
                <label>Docente</label>
                <input type="text" name="docente" class="form-control" value="{{ old('docente', $solicitud_materia->docente ?? '') }}" required>
            </div>

            <div class="form-group col-lg-4 col-sm-6">
                <label>Semestre</label>
                <input type="text" name="semestre" class="form-control" value="{{ old('semestre', $solicitud_materia->semestre ?? '') }}" required>
            </div>

            <div class="form-group col-lg-2 col-sm-6">
                <label>Turno</label>
                <input type="text" name="turno" class="form-control" value="{{ old('turno', $solicitud_materia->turno ?? '') }}" required>
            </div>

            <div class="form-group col-lg-2 col-sm-6">
                <label>Fecha Solicitud</label>
                <input type="date" name="fecha_solicitud" class="form-control" value="{{ old('fecha_solicitud', $solicitud_materia->fecha_solicitud ?? '') }}" required>
            </div>
            <div class="form-group col-lg-4 col-sm-6">
                <label>Motivo</label>
                <input type="text" name="motivo" class="form-control" value="{{ old('motivo', $solicitud_materia->motivo ?? '') }}" required>
            </div>


            <div class="form-group col-lg-2 col-sm-6">
                <label>Estado</label>
                <input type="text" name="estado" class="form-control" value="{{ old('estado', $solicitud_materia->estado ?? '') }}" required>
            </div>

            <div class="form-group col-lg-2 col-sm-6">
                <label>Observaciones</label>
                <input type="text" name="observaciones" class="form-control" value="{{ old('observaciones', $solicitud_materia->observaciones ?? '') }}" required>
            </div>


            <div class="form-group gap-2 d-flex col-12 align-items-end justify-content-around">
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">{{ isset($solicitud_materia) ? 'Actualizar' : 'Guardar' }}</button>
                </div>
                <div class="col-auto">
                    <a href="{{ route('solicitud_materias.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
            
            
                
        </div>
    </div>
</form>
@stop
