@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalle Pedidos</h1>
@stop
@section('content')
    <a href="{{route('detalle_pedidos.create')}}" class="btn btn-primary mb-3">Nuevo Detalle</a>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Estado Pedido</th>
                <th>ID Inventario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detalle_pedidos as $detalle_pedido)
                <tr>
                    <td>{{$detalle_pedido->id}}</td>
                    <td>{{$detalle_pedido->cantidad}}</td>
                    <td>{{$detalle_pedido->subtotal}}</td>

                    <td>{{$detalle_pedido->pedido->estado ?? 'Estado no reconocido'}}</td>
                    <td>{{$detalle_pedido->inventario->producto ?? 'No hay producto'}}</td>

                    <td>
                        <a href="{{route('detalle_pedidos.edit', $detalle_pedido)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('detalle_pedidos.destroy', $detalle_pedido)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar este Detalle??')">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

@stop