<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_categoria'      =>  'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ]*)*)+$/|max:20|unique:categorias,nombre_categoria|string',
            'descripcion'           =>  'nullable|string|min:6',
        ];
    }
    public function messages()
    {
        return [
            /*requerido*/
            'nombre_categoria.required'=>"El campo es obligatorio",
            /*regex*/
            'nombre_categoria.regex'=>"No debe contener numeros o simbolos",
            /*max*/
            'nombre_categoria.max'=>"Debe contener menos de 20 caracteres.",
            /*unicos*/
            'nombre_categoria.unique'=>"Debe ser unico ",
        ];
    }
}
