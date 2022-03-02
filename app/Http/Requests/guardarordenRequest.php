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
            'nombre_orden' => 'required',
            'nombre_cliente' => 'required',
            'tacos_sabor' => 'required',
            'numero_tacos' => 'required|integer',
            'refresco_sabor' => 'required',
            'numero_refresco'  => 'required|integer',
       ];
        $data = reques()->validate(

            [
                'nombre_orden.required' => 'Es necesario que llene el nombre de la orden',
                'nombre_cliente.required' => 'Es necesario que llene el nombre del cleinte',
                'tacos_sabor.required' => 'Es necesario que coloque el sabor del taco'

            ]);
    }
}
