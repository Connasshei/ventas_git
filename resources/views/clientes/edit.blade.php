@extends('adminlte::page')

@section('title', isset ($cliente) ? 'Editar Cliente' : 'Crear Cliente')

@section('content_header')
    <h1>{{isset($cliente)? 'Editar Cliente' : 'Crear Cliente'}}</h1>
@stop
@section('content')
    <form action="{{ isset($cliente) ? route('clientes.update',$cliente) : route('clientes.store')}}" method="POST">
        @csrf

        @if (isset($cliente))
            @method('PUT')
        @endif
        
        <div class="form-group">
            <label>CI</label>
            <input type="text" name="ci" class="form-control" value="{{ old('ci', $cliente->ci ?? '') }}" required>
        </div>
            <div class="form-group">
            <label>Nombre Completo</label>
            <input type="text" name="nombre_completo" class="form-control" value="{{ old('nombre_completo', $cliente->nombre_completo ?? '') }}" required>
        </div>
            <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('emai', $cliente->email ?? '') }}" required>
        </div>

        <div class="form-group">
            <label>Telefono</label>
            <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cliente->telefono ?? '') }}" required>
        </div>
            <div class="form-group">
            <label>Fecha Nacimiento</label>
            <input type="text" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $cliente->fecha_nacimiento ?? '') }}" required>


        <button type="submit" class="btn btn-success">{{isset($cliente) ? 'Actualizar' : 'Guardar'}}</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop
