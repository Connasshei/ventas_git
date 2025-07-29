@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pedido</h1>
@stop
@section('content')
    <a href="{{route('pedidos.create')}}" class="btn btn-primary mb-3">Nuevo Pedido</a>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>ID Cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{$pedido->id}}</td>
                    <td>{{$pedido->fecha}}</td>
                    <td>{{$pedido->estado}}</td>
                    <td>{{$pedido->cliente->nombre_completo ?? 'Sin Registro'}}</td>
                    <td>
                        <a href="{{route('pedidos.edit', $pedido)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('pedidos.destroy', $pedido)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar este Empleado??')">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

@stop