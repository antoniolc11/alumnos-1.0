<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:255' ,
        ];
    }

    /* Función para editar los atributos de los mensajes de error */
    public function attributes()
    {
        return [
            'nombre' => 'nombre del alumno'
        ];
    }

    /* Función para editar los mensajes de error personalizados de atributos */
/*     public function messages()
    {
        return [
            'descripcion' => 'Debe ingresar una descripción del curso'
        ];
    } */
}

