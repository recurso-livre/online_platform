<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ResourceRequest;

use App\Resource;
use App\Category;
use Auth;

class ResourceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'search']);
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
        
        // Caso seja alterada category_id para id que não exista, impeça a criação do recurso
        if (!Category::find($input["category_id"]))
            return "category_id não existente.";

        // Obter id do usuário logado
        $input["user_id"] = Auth::user()->id;
        
        // Criar registro de recurso
        $recurso = Resource::create($input);
        
        // Anexar categoria selecionado a recursos
        $recurso->categories()->attach($input["category_id"]);
        
        // Atualizar o index de Resource do Elastic Search
        $recurso->addToIndex();

        return redirect("/");
    }
    
    public function search($category, $query, $page) {
        
        // Realizar a pesquisa no catálogo indexado
        // Pesquisar por nome de recurso
        $resources = Resource::searchByQuery(['match' => ['name' => $query]]);
        //$resources = Resource::search($query);
        
        $pages = $resources->chunk(12);
        
        $count = count($pages);
        
        if ($page < 1 || $page > $count) {
            $page = 1;
        }
        
        if ($count !== 0) {
            $resources = $pages[$page-1];
        }
        
        foreach ($resources as $resource) {
            $resource->uriResources = json_decode($resource->uriResources);   
        }
        
        $search = [
            'category' => $category,
            'query' => $query,
            'page' => intval($page),
            'pages' => $count,
            'resources' => $resources
        ];
        return view("pages.resource.search", compact('search'));
    }
}
