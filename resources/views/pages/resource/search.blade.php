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
            @foreach($search['resources'] as $resource)
                @include('modules.content.resource.search-item-grid', ['resource' => $resource])
            @endforeach
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