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
    <div class="container">
        <div class="row"> 
        
            <div class="form-group col-lg-4 col-sm-12">
                <label>CI</label>
                <input type="text" name="ci" class="form-control" value="{{ old('ci', $empleado->ci ?? '') }}" required>
            </div>

            <div class="form-group col-lg-8 col-sm-12">
                <label>Nombre Completo</label>
                <input type="text" name="nombre_completo" class="form-control" value="{{ old('nombre_completo', $empleado->nombre_completo ?? '') }}" required>
            </div>

            <div class="form-group col-lg-6 col-sm-12">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email', $empleado->email ?? '') }}" required>
            </div>

            <div class="form-group col-lg-3 col-sm-12">
                <label>Rol</label>
                <input type="text" name="rol" class="form-control" value="{{ old('rol', $empleado->rol ?? '') }}" required>
            </div>

            <div class="form-group col-lg-3 col-sm-12">
                <label>Id Turno</label>
                <input type="text" name="id_turno" class="form-control" value="{{ old('id_turno', $empleado->id_turno ?? '') }}">
            </div>

            <div class="form-group gap-2 d-flex col-12 align-items-end justify-content-around">
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">{{ isset($empleado) ? 'Actualizar' : 'Guardar' }}</button>
                </div>
                <div class="col-auto">
                    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>


        </div>
    </div>
</form>
@stop
