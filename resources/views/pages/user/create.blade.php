@extends('pages.master')

@section('title', 'Cadastro')

@section('header')
    @include('modules.header.navbar')
    @include('modules.header.titlebar', [
        'name' => 'Cadastro',
    ])
@endsection

@section('content')
    <div class="container margin-tb-40">
        @include('modules.content.user.create')
    </div>
    
@endsection

@section('footer')
    @include('modules.footer.master')
@endsection