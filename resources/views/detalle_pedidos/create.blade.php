@extends('adminlte::page')

@section('title', isset($detalle_pedido) ? 'Editar Detalle' : 'Crear Detalle')

@section('content_header')
    <h1>{{ isset($detalle_pedido) ? 'Editar Detalle' : 'Crear Detalle' }}</h1>
@stop

@section('content')
<form action="{{ isset($detalle_pedido) ? route('detalle_pedidos.update', $detalle_pedido) : route('detalle_pedidos.store') }}" method="POST">
    @csrf
    @if(isset($detalle_pedido))
        @method('PUT')
    @endif
    <div class="container">
        <div class="row">

            <div class="form-group col-lg-4 col-sm-6">
                <label>Cantidad</label>
                <input type="text" name="cantidad" class="form-control" value="{{ old('cantidad', $detalle_pedido->cantidad ?? '') }}" required>
            </div>

            <div class="form-group col-lg-4 col-sm-6">
                <label>Subtotal</label>
                <input type="text" name="subtotal" class="form-control" value="{{ old('subtotal', $detalle_pedido->subtotal ?? '') }}" required>
            </div>

            <div class="form-group col-lg-2 col-sm-6">
                <label>ID Pedido</label>
                <input type="text" name="id_pedido" class="form-control" value="{{ old('id_pedido', $detalle_pedido->id_pedido ?? '') }}" required>
            </div>

            <div class="form-group col-lg-2 col-sm-6">
                <label>ID Inventario</label>
                <input type="text" name="id_inventario" class="form-control" value="{{ old('id_inventario', $detalle_pedido->id_inventario ?? '') }}" required>
            </div>

            <div class="form-group gap-2 d-flex col-12 align-items-end justify-content-around">
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">{{ isset($detalle_pedido) ? 'Actualizar' : 'Guardar' }}</button>
                </div>
                <div class="col-auto">
                    <a href="{{ route('detalle_pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
            
            
                
        </div>
    </div>
</form>
@stop
