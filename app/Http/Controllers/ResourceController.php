<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ResourceRequest;

use App\Resource;
use App\Category;

class ResourceController extends Controller
{
    // Método para inclusão de recurso (criação)
    public function create()
    {
        $categories = Category::lists('name', 'id');
        
        // Se não houver pelo menos 1 categoria, impeça a criação de recurso
        if (Category::count() == 0)
            return "É preciso criar 1 categoria.";
        
        // Caso haja 1 categoria ou mais, continue o cadastro...
        return view("recurso.create", compact('categories'));
    }
    
    public function index()
    {
        return Resource::all();
    }
    
    // Método para armazenamento dos dados de recurso passados na requisição
    public function store(ResourceRequest $request)
    {
        // Caso seja retirada o campo category_id, impeça a criação do recurso
        if (!$request->has("category_id"))
            return "category_id foi retirado.";
        
        $input = $request->all();
        
        // Caso seja alterada category_id para id que não exista, impeça a criação do recurso
        if (!Category::find($input["category_id"]))
            return "category_id não existente.";
        
        // Criar registro de recurso
        $recurso = Resource::create($input);
        $recurso->categories()->attach($input["category_id"]);
        
        return redirect("recurso/criar");
    }
}
