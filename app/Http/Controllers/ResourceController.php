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
    
    public function search($category, $query, $page) {
        $search = [
            'category' => $category,
            'query' => $query,
            'page' => intval($page),
            'pages' => 5,
            'resources' => [
            (object) [
                'resourceUri' => json_decode('{"images":["https://placehold.it/207x160"],"videos":[]}'),
                'name' => 'Impressora 3D',
                'idResource' => 1
            ],
            (object) [
                'resourceUri' => json_decode('{"images":["https://placehold.it/207x160"],"videos":[]}'),
                'name' => 'Chaves para carros',
                'idResource' => 2
            ],
            (object) [
                'resourceUri' => json_decode('{"images":["https://placehold.it/207x160"],"videos":[]}'),
                'name' => 'Chaves para casas',
                'idResource' => 3
            ],
            (object) [
                'resourceUri' => json_decode('{"images":["https://placehold.it/207x160"],"videos":[]}'),
                'name' => 'Circuitos Digitais',
                'idResource' => 4
            ]]
        ];
        return view("pages.resource.search", compact('search'));
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

    public function searchTeste(Request $request, $items = null)
    {
        // Obter dados da string de items (GET)
        $input = $request->searchField;

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
}
