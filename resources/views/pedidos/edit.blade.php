@extends('adminlte::page')

@section('title', isset ($pedido) ? 'Editar Pedido' : 'Crear Pedido')

@section('content_header')
    <h1>{{isset($pedido)? 'Editar Pedido' : 'Crear Pedido'}}</h1>
@stop
@section('content')
    <form action="{{ isset($pedido) ? route('pedidos.update',$pedido) : route('pedidos.store')}}" method="POST">
        @csrf

        @if (isset($pedido))
            @method('PUT')
        @endif
        
        
        <div class="form-group">
            <label>Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $pedido->fecha ?? '') }}" required>
        </div>
    
        <div class="form-group">
            <label></label>Estado
            <input type="text" name="estado" class="form-control" value="{{ old('estado', $pedido->estado ?? '') }}" required>
        </div>
    
        <div class="form-group">
            <label>ID Cliente</label>
            <input type="text" name="id_cliente" class="form-control" value="{{ old('id_cliente', $pedido->id_cliente ?? '') }}" required>
        </div>
    
    
    
        
        <button type="submit" class="btn btn-success">{{isset($pedido) ? 'Actualizar' : 'Guardar'}}</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop
