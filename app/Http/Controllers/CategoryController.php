<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryRequest;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    
    // Exemplo de método que mostra recursos relacionados à categoria escolhida
    public function resources($id)
    {
        return Category::find($id)->resources;
    }
    
    public function create()
    {
        return view("categoria.create");
    }
    
    public function store(CategoryRequest $request)
    {
        $input = $request->all();
        
        Category::create($input);
        
        return redirect("categoria/criar");
    }
}
