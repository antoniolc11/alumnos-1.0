@extends('layouts.plantilla')
@section('tittle', 'home')
@section('content')
    <h1>Bienvenido al alumno: {{$alumno->nombre}}</h1>
    <a href="{{ route('alumnos.index') }}">Volver a alumnos</a>
    <a href="{{ route('alumnos.edit', $alumno) }}">Editar alumno</a>
    <a href="{{ route('alumnos.criterios', $alumno) }}">ver criterios del alumno</a>
    <form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar alumno</button>
    </form>
@endsection
