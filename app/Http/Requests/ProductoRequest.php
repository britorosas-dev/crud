<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
        switch ($this->method())
        {
            case 'POST':
                $rules =  [
                    'nombre' => 'required|max:150',
                    'descripcion' => 'required',
                    'foto' => 'required|mimes:jpeg,png,jpg,gif|max:1024',
                    'envio' => 'required',
                    'condicion' => 'required',
                    'precio' => 'required|numeric',
                    'proveedor' => 'required',
                ];



                return $rules;
                break;

            case 'PATCH':
            case 'PUT':
            $rules =  [
                'nombre' => 'required|max:150',
                'descripcion' => 'required',
                'envio' => 'required',
                'condicion' => 'required',
                'precio' => 'required|numeric',
                'proveedor' => 'required',
            ];
                if($this->get('foto'))
                    $rules = array_merge($rules, ['foto' => '|mimes:jpeg,png,jpg,gif|max:1024']);
                return $rules;
                break;
        }
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Es necesario escribir el nombre .',
            'descripcion.required' => 'Es necesario escribir la descripcion .',
            'nombre.max' => 'El nombre no puede ser mayor a 150 caracteres.',
            'foto.required' => 'Debe seleccionar una foto del producto.',
            'foto.mimes' => 'Solo se aceptan imagenes del tipo jpeg,png,jpg,gif .',
            'foto.max' => 'foto no debe ser mayor a 1MB',
            'envio.required' => 'Seleccione un tipo de envio.',
            'condicion.required' => 'Seleccione la condicion del producto.',
            'precio.required' => 'Escriba el precio del producto',
            'precio.numeric' => 'El precio debe ser un valor numerico.',
            'proveedor.required' => 'Seleccione el proveedor.',
        ];
    }
}
