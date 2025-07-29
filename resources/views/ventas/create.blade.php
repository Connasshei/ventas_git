@extends('adminlte::page')

@section('title', isset($venta) ? 'Editar Venta' : 'Crear Venta')

@section('content_header')
    <h1>{{ isset($venta) ? 'Editar Venta' : 'Crear Venta' }}</h1>
@stop

@section('content')
<form action="{{ isset($venta) ? route('ventas.update', $venta) : route('ventas.store') }}" method="POST">
    @csrf
    @if(isset($venta))
        @method('PUT')
    @endif

    <div class="form-group">
        <label>Fecha</label>
        <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $venta->fecha ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Total</label>
        <input type="text" name="total" class="form-control" value="{{ old('total', $venta->total ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>ID Pedido</label>
        <input type="text" name="id_pedido" class="form-control" value="{{ old('id_pedido', $venta->id_pedido ?? '') }}" required>
    </div>


    <button type="submit" class="btn btn-success">{{ isset($venta) ? 'Actualizar' : 'Guardar' }}</button>
    <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@stop
