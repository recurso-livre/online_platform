@extends('pages.master')

@section('title', $search['query'])

@section('header')
    @include('modules.header.navbar')
    @include('modules.header.titlebar', [
        'name' => "Pesquisando por: {$search['query']}",
    ])
@endsection

@section('content')
    <div class="container margin-tb-40">
        <div class="row">
            @if(count($search['resources']))
                @foreach($search['resources'] as $resource)
                    @include('modules.content.resource.search-item-grid', ['resource' => $resource])
                @endforeach
            @else
                <div style="text-align: center">
                    <h1 style="color: #7d7d7d; font-weight: bold; margin: 120px auto">Nenhum recurso encontrado</h1>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('modules.content.generic.pagination', [
                    'active' => $search['page'],
                    'pages' => $search['pages'],
                    'interval' => 2,
                    'url' => '{page}'
                ])
            </div>
        </div>
        
    </div>
@endsection

@section('footer')
    @include('modules.footer.master')
@endsection