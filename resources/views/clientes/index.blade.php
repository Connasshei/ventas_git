@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cliente</h1>
@stop
@section('content')
    <a href="{{route('clientes.create')}}" class="btn btn-primary mb-3">Nuevo Cliente</a>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>CI</th>
                <th>Nombre Completo</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Fecha Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->ci}}</td>
                    <td>{{$cliente->nombre_completo}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->fecha_nacimiento}}</td>
                    <td>
                        <a href="{{route('clientes.edit', $cliente)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('clientes.destroy', $cliente)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar este cliente??')">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

@stop