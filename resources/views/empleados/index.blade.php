@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Empleado</h1>
@stop
@section('content')
    <a href="{{route('empleados.create')}}" class="btn btn-primary mb-3">Nuevo Empleado</a>
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
                <th>Rol</th>
                <th>id_turno</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->ci}}</td>
                    <td>{{$empleado->nombre_completo}}</td>
                    <td>{{$empleado->email}}</td>
                    <td>{{$empleado->rol}}</td>
                    <td>{{$empleado->id_turno}}</td>
                    <td>
                        <a href="{{route('empleados.edit', $empleado)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('empleados.destroy', $empleado)}}" method="POST" style="display: inline-block;">
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