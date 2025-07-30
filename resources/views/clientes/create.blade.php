@extends('adminlte::page')

@section('title', isset($cliente) ? 'Editar Cliente' : 'Crear Cliente')

@section('content_header')
    <h1>{{ isset($cliente) ? 'Editar Cliente' : 'Crear Cliente' }}</h1>
@stop

@section('content')
<form action="{{ isset($cliente) ? route('clientes.update', $cliente) : route('clientes.store') }}" method="POST">
    @csrf
    @if(isset($cliente))
        @method('PUT')
    @endif
    <div class="container">
        <div class="row">
            <div class="form-group col-lg-4 col-sm-12">
                <label>CI</label>
                <input type="text" name="ci" class="form-control" value="{{ old('ci', $cliente->ci ?? '') }}" required>
            </div>

            <div class="form-group col-lg-8 col-sm-12">
                <label>Nombre Completo</label>
                <input type="text" name="nombre_completo" class="form-control" value="{{ old('nombre_completo', $cliente->nombre_completo ?? '') }}" required>
            </div>

            <div class="form-group col-lg-8 col-sm-12">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email', $cliente->email ?? '') }}" required>
            </div>

            <div class="form-group col-lg-4 col-sm-12">
                <label>Telefono</label>
                <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cliente->telefono ?? '') }}" required>
            </div>

            <div class="form-group col-lg-4 col-sm-12">
                <label>Fecha Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $cliente->fecha_nacimiento ?? '') }}" required>
            </div>
            
            <div class="form-group gap-2 d-flex col-lg-8 col-sm-12 align-items-end justify-content-end">
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">{{ isset($cliente) ? 'Actualizar' : 'Guardar' }}</button>
                </div>
                <div class="col-auto">
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
    
    
            </div>
    
        </div>
    </div>

</form>
@stop
