@extends('adminlte::page')

@section('title', isset($detalle_pedido) ? 'Editar Detalle' : 'Crear Detalle')

@section('content_header')
    <h1>{{ isset($detalle_pedido) ? 'Editar Detalle' : 'Crear Detalle' }}</h1>
@stop

@section('content')
<form action="{{ isset($detalle_pedido) ? route('detalle_pedido.update', $detalle_pedido) : route('detalle_pedidos.store') }}" method="POST">
    @csrf
    @if(isset($detalle_pedido))
        @method('PUT')
    @endif

    <div class="form-group">
        <label>Cantidad</label>
        <input type="text" name="cantidad" class="form-control" value="{{ old('cantidad', $detalle_pedido->cantidad ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>Subtotal</label>
        <input type="text" name="subtotal" class="form-control" value="{{ old('subtotal', $detalle_pedido->subtotal ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>ID Pedido</label>
        <input type="text" name="id_pedido" class="form-control" value="{{ old('id_pedido', $detalle_pedido->id_pedido ?? '') }}" required>
    </div>

    <div class="form-group">
        <label>ID Inventario</label>
        <input type="text" name="id_inventario" class="form-control" value="{{ old('id_inventario', $detalle_pedido->id_inventario ?? '') }}" required>
    </div>


    <button type="submit" class="btn btn-success">{{ isset($detalle_pedido) ? 'Actualizar' : 'Guardar' }}</button>
    <a href="{{ route('detalle_pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@stop
