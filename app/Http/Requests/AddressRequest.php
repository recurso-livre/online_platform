<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddressRequest extends Request
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
            "zipCode" =>        "required",
            "street" =>         "required|max:255",
            "additionalData" => "required|max:255",
            "neighborhood" =>   "required|max:255",
            "city" =>           "required|max:255",
            "state" =>          "required|max:255"
        ];
    }
}
