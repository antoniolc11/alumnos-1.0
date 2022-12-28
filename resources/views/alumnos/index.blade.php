@extends('layouts.plantilla')
@section('tittle', 'home')
@section('content')
    <h1>Bienvenido a la pagina principal de alumnos</h1>

    <ul>
        @foreach ($alumnos as $alumno)
                <li>{{$alumno->nombre}}</li>
        @endforeach
    </ul>
@endsection
