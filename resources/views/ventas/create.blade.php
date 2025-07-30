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
    <div class="container">
        <div class="row">


            <div class="form-group col-lg-5 col-sm-12">
                <label>Fecha</label>
                <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $venta->fecha ?? '') }}" required>
            </div>

            <div class="form-group col-lg-5 col-sm-12">
                <label>Total</label>
                <input type="text" name="total" class="form-control" value="{{ old('total', $venta->total ?? '') }}" required>
            </div>

            <div class="form-group col-lg-2 col-sm-12">
                <label>ID Pedido</label>
                <input type="text" name="id_pedido" class="form-control" value="{{ old('id_pedido', $venta->id_pedido ?? '') }}" required>
            </div>
            <div class="form-group gap-2 d-flex col-12 align-items-end justify-content-around">
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">{{ isset($venta) ? 'Actualizar' : 'Guardar' }}</button>
                </div>
                <div class="col-auto">
                    <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>

            
            
            </div>
    </div>
</form>
@stop
