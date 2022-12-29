@extends('layouts.plantilla')
@section('tittle', 'home')
@section('content')
    <h1>Bienvenido a la pagina principal de alumnos</h1>
    <a href="{{ route('alumnos.create') }}">Crear alumno</a>
    <ul>
        @foreach ($alumnos as $alumno)
               {{--  <li><a href="{{ route('alumnos.show', $alumno) }}">{{$alumno->nombre}}</a></li> --}}



                <div class="p-6 max-w-xs min-w-full bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ route('alumnos.show', $alumno) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $alumno->nombre }}
                        </h5>

                        @if ($alumno->notas->count('nota')>0)
                        Nota media: {{$alumno->notas->avg('nota')}}
                        <br>
                        Numero de notas: {{$alumno->notas->count('nota')}}
                        @endif

                    </a>
                </div>

        @endforeach
    </ul>
@endsection
