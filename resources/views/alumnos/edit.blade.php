@extends('layouts.plantilla')

@section('tittle', 'alumnos edit')

@section('content')
    <h1>En esta pagina podrás editar un alumno</h1>

    <form action="{{route('alumnos.update', $alumno)}}" method="POST">
        @method('put')
        @csrf {{-- agrega el campo oculto con el token (si no ponemos esto no valdrá el envio del formulario) --}}
        <label for="nombre">
            Nombre <br>
            <input type="text" name="nombre" id="" value="{{old('nombre', $alumno->nombre)}}"> <br>
        </label>

        @error('nombre')
        <br>
            <small>*{{$message}}</small>
        <br>
        @enderror
        <button type="submit">Actualizar alumno</button>
    </form>
@endsection
