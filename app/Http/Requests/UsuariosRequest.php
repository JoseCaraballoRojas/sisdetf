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
            'nombre'    => 'min:4|max:60|required|alpha',
            'apellido'  => 'min:4|max:60|required|alpha',
            'usuario'   => 'min:4|max:60|required|unique:usuarios',
            'cedula'    => 'required|digits_between: 7 , 8|integer',
            'password'  => 'min:8|max:60|required|alpha_dash'
        ];
    }
}
