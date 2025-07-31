@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Solicitud Materias</h1>
@stop
@section('content')
    <a href="{{route('solicitud_materias.create')}}" class="btn btn-primary mb-3">Nuevo Detalle</a>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre Estudiante</th>
                <th>Codigo Materia</th>
                <th>Nombre Materia</th>
                <!-- <th>Grupo</th> -->
                <!-- <th>Docente</th> -->
                <!-- <th>Semestre</th> -->
                <th>Turno</th>
                <th>Fecha Solicitud</th>
                <th>Motivo</th>
                <th>Estado</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($solicitud_materias as $solicitud_materia)
                <tr>
                    <td>{{$solicitud_materia->id}}</td>
                    <td>{{$solicitud_materia->estudiante->nombres ?? 'Estudiante no reconocido'}}</td>
                    <td>{{$solicitud_materia->codigo_materia}}</td>
                    <td>{{$solicitud_materia->nombre_materia}}</td>
                    <!-- <td>{{$solicitud_materia->grupo}}</td> -->
                    <!-- <td>{{$solicitud_materia->docente}}</td> -->
                    <!-- <td>{{$solicitud_materia->semestre}}</td> -->
                    <td>{{$solicitud_materia->turno}}</td>
                    <td>{{$solicitud_materia->fecha_solicitud}}</td>
                    <td>{{$solicitud_materia->motivo}}</td>
                    <td>{{$solicitud_materia->estado}}</td>
                    <td>{{$solicitud_materia->observaciones}}</td>

                    <td>
                        <a href="{{route('solicitud_materias.edit', $solicitud_materia)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('solicitud_materias.destroy', $solicitud_materia)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Estas seguro de eliminar esta Solicitud??')">Eliminar</button>
                        </form>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

@stop