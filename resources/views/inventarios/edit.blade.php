@extends('adminlte::page')

@section('title', isset ($inventario) ? 'Editar Cliente' : 'Crear Cliente')

@section('content_header')
    <h1>{{isset($inventario)? 'Editar Cliente' : 'Crear Cliente'}}</h1>
@stop
@section('content')
<form action="{{ isset($inventario) ? route('inventarios.update', $inventario) : route('inventarios.store') }}" method="POST">
    @csrf
    @if(isset($inventario)) 
        @method('PUT')
    @endif
    <div class="container">
        <div class="row">
            <div class="form-group col-lg-8 col-sm-12">
                <label>Producto</label>
                <input type="text" name="producto" class="form-control" value="{{ old('producto', $inventario->producto ?? '') }}" required>
            </div>
            
            <div class="form-group col-lg-4 col-sm-12">
                <label>Precio</label>
                <input type="text" name="precio" class="form-control" value="{{ old('precio', $inventario->precio ?? '') }}" required>
            </div>

            <div class="form-group col-lg-6 col-sm-12">
                <label>Stock Anual</label>
                <input type="number" name="stock_anual" class="form-control" value="{{ old('stock_anual', $inventario->stock_anual ?? '') }}" required>
            </div>

            <div class="form-group col-lg-6 col-sm-12">
                <label>Stock Minimo</label>
                <input type="number" name="stock_minimo" class="form-control" value="{{ old('stock_minimo', $inventario->stock_minimo ?? '') }}" required>
            </div>
            <div class="form-group gap-2 d-flex col-12 align-items-end justify-content-around">
                <div>
                    <button type="submit" class="btn btn-success">{{ isset($inventario) ? 'Actualizar' : 'Guardar' }}</button>
                </div>
                <div>
                    <a href="{{ route('inventarios.index') }}" class="btn btn-secondary">Cancelar</a> 
                </div>
            </div>
            
            
            </div>
    </div>
</form>
@stop
