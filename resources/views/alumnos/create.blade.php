@extends('layouts.plantilla')
@section('tittle', 'create')
@section('content')
    <h1>Bienvenido aquí podras crear alumnos</h1>

    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf {{-- agrega el campo oculto con el token (si no ponemos esto no valdrá el envio del formulario) --}}
        <label for="nombre">
            Nombre <br>
            <input type="text" name="nombre" id="" value="{{old('nombre')}}"> <br>
        </label>

        @error('nombre')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <button type="submit">Crear usuario</button>
@endsection
