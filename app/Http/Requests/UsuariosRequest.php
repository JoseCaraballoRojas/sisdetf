<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuariosRequest extends Request
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
            'nombre'    => 'min:4|max:60|required',
            'apellido'  => 'min:4|max:60|required',
            'usuario'   => 'min:4|max:60|required|unique:usuarios',
            'cedula'    => 'min:7|max:8|required',
            'password'  => 'min:4|max:60|required'
        ];
    }
}
