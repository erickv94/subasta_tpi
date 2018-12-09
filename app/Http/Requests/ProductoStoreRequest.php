<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoStoreRequest extends FormRequest
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
            'nombre_producto'    =>  'required|regex:/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+((\s*)+([a-zA-ZñÑáéíóúÁÉÍÓÚ]*)*)+$/|max:80|string',
            'precio_inicial'     =>  'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'fecha_expiracion'   =>  'required|date|after:yesterday',
            'descripcion'        =>  'nullable',
            'categorias'         =>  'required',
            'file_img'           =>  'required|mimes:jpeg,bmp,jpg,png|between:1,6000|dimensions:min_width=1200,min_height=400',
        ];
    }
    public function messages()
    {
        $required="El campo es obligatorio";

        return [
            /*requerido*/
            'nombre_producto.required'=>$required,
            'precio_inicial.required'=>$required,
            'fecha_expiracion.required'=>$required,
            'categorias.required'=>$required,
            'file_img.required'=>$required,
            /*regex*/
            'nombre_producto.regex'=>"No debe contener numeros o simbolos",
            'precio_inicial.regex'=>"debe tener el formato para dolares",
            /*max*/
            'nombre_producto.max'=>"Debe contener menos de 80 caracteres.",
            /*Fecha*/
            "fecha_expiracion.date"=>"Debe ser una fecha",
            "fecha_expiracion.after"=>"La fecha debe ser despues de ahora",

        ];
    }
}
