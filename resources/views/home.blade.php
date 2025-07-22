@extends ('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Dashboard</h1>
@stop       //cada section se tiene que cerrar con un stop

@section('content_body')
    <p>Bienvenidos</p>
@stop

@section('css')
        {{-- Add here extra stylessheets --}}
    {{-- <link rel ="stylesheet" href="css/admin.custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hola estoy usando Laravel-AdminLTE paquetote");</script>
@stop