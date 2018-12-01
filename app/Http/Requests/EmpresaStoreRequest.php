<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaStoreRequest extends FormRequest
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
            'name'                  =>  'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ]*)*)+$/|max:80|string',
            'email'                 =>  'required|email|unique:users,email|max:80|min:6',
            'password'              =>  'required|string|min:6',
            'username'              =>  'required|string|max:80',
            'direccion'             =>  'nullable|string',
            'forma_juridica'        =>  'nullable|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ]*)*)+$/',
            'rubro'                 =>  'nullable|string|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ]*)*)+$/',
        ];
    }
    public function messages()
    {
        $regex="No debe contener numeros o simbolos";
        $required="El campo es obligatorio";
        $max="Debe contener menos de 80 caracteres.";
        $min="Debe contener menos de 6 caracteres.";

        return [
            /*requerido*/
            'name.required'=>$required,
            'password.required'=>$required,
            'username.required'=>$required,
            'email.required'=>$required,
            /*regex*/
            'name.regex'=>$regex,
            'forma_juridica.regex'=>$regex,
            'rubro.regex'=>$regex,
            /*max*/
            'name.max'=>$max,
            'email.max'=>$max,
            'username.max'=>$max,
            /*min*/
            'email.min'=>$min,
            'password.min'=>$min,
            /*unicos*/
            'email.unique'=>"El email ya existe en los registros",
            'email.email'=>"Debe ser un email correcto",
        ];
    }
}
