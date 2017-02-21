<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CausaRequest extends Request
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
          'causa'    => 'min:5|max:100|required',
          'descripcion'    => 'min:10|max:200|required',
          'idFallaFK'  => 'required'
        ];
    }
}
