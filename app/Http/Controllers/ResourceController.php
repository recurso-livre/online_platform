<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ResourceRequest;

use App\Resource;
use App\Category;

class ResourceController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    // Método para inclusão de recurso (criação)
    public function create()
    {
        $categories = Category::lists('name', 'id');
        
        // Se não houver pelo menos 1 categoria, impeça a criação de recurso
        if (Category::count() == 0)
            return "É preciso criar 1 categoria.";
        
        // Caso haja 1 categoria ou mais, continue o cadastro...
        return view("pages.resource.create", compact('categories'));
    }
    
    public function index()
    {
        return Resource::all();
    }
    
    // Método para armazenamento dos dados de recurso passados na requisição
    public function store(ResourceRequest $request)
    {
        $input = $request->all();
        //return $input;
        
        // Caso seja alterada category_id para id que não exista, impeça a criação do recurso
        if (!Category::find($input["category_id"]))
            return "category_id não existente.";

        $input["user_id"] = '1';
        
        // Criar registro de recurso
        $recurso = Resource::create($input);

        $recurso->categories()->attach($input["category_id"]);

        return redirect("/");
    }

    public function homeSearch()
    {
        return view('recurso.search');
    }

    public function searchTeste(Request $request)
    {
        // Obter dados da string de items (GET)
        $input = $request->searchField;
        
        //return $input;

        // Realizar a pesquisa no catálogo indexado
        // Pesquisar por nome de recurso
        $resources = Resource::searchByQuery(['match' => ['name' => $input]]);

        // O código abaixo é apenas um exemplo de saída
        $html_stream = 'Resultado:<br/><br/>';

        foreach ($resources as $resource)
        {
            $html_stream .= '<b>Name</b>: '.$resource->name.'<br/>';
            $html_stream .= '<b>technicalDescription</b>: '.$resource->technicalDescription.'<br/>';
            $html_stream .= '<b>informalDescription</b>: '.$resource->informalDescription.'<br/>';
            $html_stream .= '<b>uriResources</b>: '.$resource->uriResources.'<br/><br/>';
            $html_stream .= '<hr>';
        }

        return $html_stream;
    }
    
    public function search($category, $query, $page) {
        
        // Realizar a pesquisa no catálogo indexado
        // Pesquisar por nome de recurso
        $resources = Resource::searchByQuery(['match' => ['name' => $query]]);
        
        foreach ($resources as $resource) {
            $resource->uriResources = json_decode($resource->uriResources);   
        }
        
        $search = [
            'category' => $category,
            'query' => $query,
            'page' => intval($page),
            'pages' => 1,
            'resources' => $resources
        ];
        return view("pages.resource.search", compact('search'));
    }
}
