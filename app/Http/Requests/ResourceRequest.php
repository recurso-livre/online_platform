<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ResourceRequest extends Request
{
    /**
     * Determine se o usuário tem autorização para esta requisição.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Regras de validação aplicáveis para a requisição.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"                  => "required|min:5|max:255",
            "technicalDescription"  => "required|min:5|max:1000",
            "informalDescription"   => "required|min:5|max:1000"
        ];
    }
}
