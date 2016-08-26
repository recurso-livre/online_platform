<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            "name"          => "required|unique:categories,name|min:5|max:255", // unique:categories,name => um único deve existir somente na tabela categories
            "description"   => "required|max:1000"
        ];
    }
}
