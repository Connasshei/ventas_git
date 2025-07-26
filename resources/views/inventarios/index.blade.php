@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Inventario</h1>
@stop
@section('content')
    <a href="{{route('inventarios.create')}}" class="btn btn-primary mb-3">Nuevo Inventario</a>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Producto</th>
                <th>Stock Actual</th>
                <th>Stock Minimo</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventarios as $inventario)
                <tr>
                    <td>{{$inventario->id}}</td>
                    <td>{{$inventario->producto}}</td>
                    <td>{{$inventario->stock_anual}}</td>
                    <td>{{$inventario->stock_minimo}}</td>
                    <td>{{$inventario->precio}}</td>
                    <td>
                        <a href="{{route('inventarios.edit', $inventario)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('inventarios.destroy', $inventario)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar este inventario??')">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

@stop