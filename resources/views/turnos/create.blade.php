@extends('adminlte::page')

@section('title', isset ($turno) ? 'Editar turno' : 'Crear Turno')

@section('content_header')
    <h1>{{isset($turno)? 'Editar turno' : 'Crear Turno'}}</h1>
@stop
@section('content')
    <form action="{{ isset($turno) ? route('turnos.update',$turno) : route('turnos.store')}}" method="POST">
        @csrf

        @if (isset($turno))
            @method('PUT')
        @endif
        <div class="container">
            <div class="row">

            
                <div class="form-group col-lg-6 col-sm-12">
                    <label>Hora de Entrada</label>
                    <input type="time" name="hora_entrada" class="form-control" value="{{ old('hora_entrada', $turno->hora_entrada ?? '') }}" required>
                </div>
                    <div class="form-group col-lg-6 col-sm-12">
                    <label>Hora de Salida</label>
                    <input type="time" name="hora_salida" class="form-control" value="{{ old('hora_salida', $turno->hora_salida ?? '') }}" required>
                </div>
                    <div class="form-group col-lg-4 col-sm-12">
                    <label>Dias Descanso</label>
                    <input type="text" name="dias_descanso" class="form-control" value="{{ old('dias_descanso', $turno->dias_descanso ?? '') }}" required>
                </div>
                <div class="form-group gap-2 d-flex col-lg-8 col-sm-12 align-items-end justify-content-end">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-success">{{isset($turno) ? 'Actualizar' : 'Guardar'}}</button>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('turnos.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>                    
                </div>
                

            </div>
        </div>
    </form>
@stop
