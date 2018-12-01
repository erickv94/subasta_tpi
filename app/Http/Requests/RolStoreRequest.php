<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolStoreRequest extends FormRequest
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
            'name'                  =>  'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ]*)*)+$/|max:20|unique:roles,name|string',
            'slug'                  =>  'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ]*)*)+$/|max:20|string|unique:roles,slug|max:20|min:6',
            'description'           =>  'nullable|string|min:6',
            'special'               =>  'nullable',
        ];
    }
    public function messages()
    {
        $regex="No debe contener numeros o simbolos";
        $required="El campo es obligatorio";
        $max="Debe contener menos de 20 caracteres.";
        $min="Debe contener menos de 6 caracteres.";
        $unique = "Debe ser unico ";
        return [
            /*requerido*/
            'name.required'=>$required,
            'slug.required'=>$required,
            /*regex*/
            'name.regex'=>$regex,
            'slug.regex'=>$regex,
            /*max*/
            'name.max'=>$max,
            'slug.max'=>$max,
            /*min*/
            'slug.min'=>$min,
            /*unicos*/
            'name.unique'=>$unique,
            'slug.unique'=>$unique,
        ];
    }
}
