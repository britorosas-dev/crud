<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProveedorRequest extends FormRequest
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
                    'nombre' => 'required|max:150',
                    'email' => 'required|string|email',
                    'telefono' => 'max:20',
                    'estatus' => 'required',
                    'pais' => 'required',
                    'ciudad' => 'required',
                ];

    }

    public function messages()
    {
        return [
            'nombre.required' => 'Es necesario escribir el nombre del proveedor.',
            'nombre.max' => 'El nombre no puede ser mayor a 150 caracteres.',
            'email.required' => 'Es necesario escribir el correo electronico del proveedor.',
            'email.email' => 'Escriba un correo valido.',
            'telefono.max' => 'El telefono no puede ser mayor a 20 caracteres.',
            'estatus.required' => 'Seleccione un tipo.',
            'pais.required' => 'Es necesario escribir el pais del proveedor.',
            'ciudad.required' => 'Es necesario escribir la ciudad del proveedor.',
        ];
    }
}
