<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FallaRequest extends Request
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
            'falla'    => 'min:2|max:100|required|unique:fallas',
            'descripcion'    => 'min:5|max:200|required',
            'idTipoFK'  => 'required'
        ];
    }
}
