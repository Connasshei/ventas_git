@extends('adminlte::page')

@section('title', isset($estudiante) ? 'Editar Estudiante' : 'Registrar Estudiante')

@section('content_header')
    <h1>{{ isset($estudiante) ? 'Editar Estudiante' : 'Registrar Estudiante' }}</h1>
@stop

@section('content')
<form action="{{ isset($estudiante) ? route('estudiantes.update', $estudiante) : route('estudiantes.store') }}" method="POST">
    @csrf
    @if(isset($estudiante))
        @method('PUT')
    @endif
    <div class="container">
        <div class="row">


            <div class="form-group col-lg-4 col-sm-12">
                <label>Nombres</label>
                <input type="text" name="nombres" class="form-control" value="{{ old('nombres', $estudiante->nombres ?? '') }}" required>
            </div>

            <div class="form-group col-lg-5 col-sm-12">
                <label>Apellidos</label>
                <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos', $estudiante->apellidos ?? '') }}" required>
            </div>

            <div class="form-group col-lg-3 col-sm-12">
                <label>CI</label>
                <input type="text" name="ci" class="form-control" value="{{ old('ci', $estudiante->ci ?? '') }}" required>
            </div>

            <div class="form-group col-lg-4 col-sm-12">
                <label>Correo</label>
                <input type="text" name="correo" class="form-control" value="{{ old('correo', $estudiante->correo ?? '') }}" required>
            </div>

            <div class="form-group col-lg-5 col-sm-12">
                <label>Telefono</label>
                <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $estudiante->telefono ?? '') }}" required>
            </div>

            <div class="form-group col-lg-3 col-sm-12">
                <label>Direccion</label>
                <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $estudiante->direccion ?? '') }}" required>
            </div>
            
            <div class="form-group col-lg-4 col-sm-12">
                <label>Fecha Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $estudiante->fecha_nacimiento ?? '') }}" required>
            </div>

            <div class="form-group col-lg-5 col-sm-12">
                <label>Genero</label>
                <input type="text" name="genero" class="form-control" value="{{ old('genero', $estudiante->genero ?? '') }}" required>
            </div>

            <div class="form-group col-lg-3 col-sm-12">
                <label>Carrera</label>
                <input type="text" name="carrera" class="form-control" value="{{ old('carrera', $estudiante->carrera ?? '') }}" required>
            </div>
            <div class="form-group col-lg-4 col-sm-12">
                <label>Año Ingreso</label>
                <input type="date" name="año_ingreso" class="form-control" value="{{ old('año_ingreso', $estudiante->año_ingreso ?? '') }}" required>
            </div>

            <div class="form-group col-lg-5 col-sm-12">
                <label>Estado</label>
                <input type="text" name="estado" class="form-control" value="{{ old('estado', $estudiante->estado ?? '') }}" >
            </div>


            <div class="form-group gap-2 d-flex col-12 align-items-end justify-content-between">
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">{{ isset($estudiante) ? 'Actualizar' : 'Guardar' }}</button>
                </div>
                <div class="col-auto">
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>


        </div>
    </div>
</form>
@stop
