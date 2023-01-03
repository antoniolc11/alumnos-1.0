@extends('layouts.plantilla')
@section('tittle', 'home')
@section('content')

<div class="overflow-x-auto relative">
        <div class="mt-7">
            <a href="{{ route('alumnos.create') }}" class="text-white m-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Crear alumno</a>
        </div>
        
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Alumnos
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Asignaturas
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nota media
                    </th>
                </tr>
            </thead>
                @foreach ($alumnos as $alumno)
                    <tbody>
                        <tr>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('alumnos.show', $alumno) }}">{{ $alumno->nombre }}</a>
                            </th>
                            @if ($alumno->notas->count('nota') > 0)
                            <td class="content-center py-4 px-6">{{ $alumno->notas->count('nota') }}</td>
                            <td class="py-4 px-6" >{{ $alumno->notas->avg('nota') }}</td>
                            <br>
                            @else
                                <td class="py-4 px-6">S/N</td>
                                <td class="py-4 px-6">S/N</td>
                            @endif
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

@endsection
