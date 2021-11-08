<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeArea extends FormRequest
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
            'nombre' => 'required|unique:areas',
            'descripcion' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre del Area',
            'descripcion' => 'Descripción del Area',
        ];
    }

    public function messages()
    {
        return [
            'nombre.unique' => "El nombre del Area ya existe.",
        ];
    }
}
