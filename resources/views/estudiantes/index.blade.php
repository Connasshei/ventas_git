@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiante</h1>
@stop
@section('content')
    <a href="{{route('estudiantes.create')}}" class="btn btn-primary mb-3">Nuevo Estudiante</a>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CI</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Fecha Nacimiento</th>
                <!-- <th>Genero</th> -->
                <th>Carrera</th>
                <th>Año Ingreso</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{$estudiante->id}}</td>
                    <td>{{$estudiante->nombres}}</td>
                    <td>{{$estudiante->apellidos}}</td>
                    <td>{{$estudiante->ci}}</td>
                    <td>{{$estudiante->correo}}</td>
                    <td>{{$estudiante->telefono}}</td>
                    <td>{{$estudiante->direccion}}</td>
                    <td>{{$estudiante->fecha_nacimiento}}</td>
                    <!-- <td>{{$estudiante->genero}}</td> -->
                    <td>{{$estudiante->carrera}}</td>
                    <td>{{$estudiante->año_ingreso}}</td>
                    <td>{{$estudiante->estado}}</td>
                    <td>
                        <a href="{{route('estudiantes.edit', $estudiante)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('estudiantes.destroy', $estudiante)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar este Estudiante??')">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

@stop