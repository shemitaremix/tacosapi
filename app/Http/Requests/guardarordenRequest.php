<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class guardarordenRequest extends FormRequest
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
            "nombre_orden" => "required",
            "nombre_cliente" => "required",
            "tacos_sabor" => "required",
            "numero_tacos" => "required",
            "refresco_sabor" => "required",
            "numero_refresco" => "required",
        ];
    }
}
