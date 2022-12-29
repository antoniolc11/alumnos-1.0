@extends('layouts.plantilla')
@section('tittle', 'home')
@section('content')
    <h1>CRITERIOS de: {{$alumno->nombre}}</h1>


    {{$alumno->notas}}
        <br>
    @foreach ($alumno->notas as $nota)
            <p>
                {{$nota->id }} : {{$nota->ccee->ce }}-{{$nota->ccee->descripcion }}-> {{$nota->nota }}
            </p>
    @endforeach

@endsection
