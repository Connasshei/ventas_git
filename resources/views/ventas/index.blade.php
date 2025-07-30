@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Venta</h1>
@stop
@section('content')
    <a href="{{route('ventas.create')}}" class="btn btn-primary mb-3">Nueva Venta</a>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Nombre Cliente</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
                <tr>
                    <td>{{$venta->id}}</td>
                    <td>{{$venta->fecha}}</td>
                    <td>{{$venta->total}}</td>
                    <td>{{ $venta->pedido->cliente->nombre_completo ?? 'Sin cliente' }}</td>
                    <td>
                        <a href="{{route('ventas.edit', $venta)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('ventas.destroy', $venta)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar esta Venta??')">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

@stop