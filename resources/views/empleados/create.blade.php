@extends('adminlte::page')

@section('title', isset($empleado) ? 'Editar Empleado' : 'Crear Empleado')

@section('content_header')
    <h1>{{ isset($empleado) ? 'Editar Empleado' : 'Crear Empleado' }}</h1>
@stop

@section('content')
<form action="{{ isset($empleado) ? route('empleados.update', $empleado) : route('empleados.store') }}" method="POST">
    @csrf
    @if(isset($empleado))
        @method('PUT')
    @endif

    <div class="form-group">
        <label>CI</label>
        <input type="text" name="ci" class="form-control" value="{{ old('ci', $empleado->ci ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Nombre Completo</label>
        <input type="text" name="nombre_completo" class="form-control" value="{{ old('nombre_completo', $empleado->nombre_completo ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="{{ old('email', $empleado->email ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Rol</label>
        <input type="text" name="rol" class="form-control" value="{{ old('rol', $empleado->rol ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Id Turno</label>
        <input type="text" name="id_turno" class="form-control" value="{{ old('id_turno', $empleado->id_turno ?? '') }}">
    </div>


    <button type="submit" class="btn btn-success">{{ isset($empleado) ? 'Actualizar' : 'Guardar' }}</button>
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@stop
