@extends('layouts.plantilla')

@section('tittle', 'alumnos edit')

@section('content')

    <div class="bg-slate-100 flex justify-center mt-10">
        <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
            @method('put')
            @csrf {{-- agrega el campo oculto con el token (si no ponemos esto no valdrá el envio del formulario) --}}
            <div class="mb-6 w-96">
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre alumno</label>
                <input type="text" id="nombre" name="nombre"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{old('nombre', $alumno->nombre)}}" required>

                @error('nombre')
                <br>
                <small>*{{ $message }}</small>
                <br>
                @enderror
            </div>


            <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear alumno</button>

        </form>
    </div>
@endsection
