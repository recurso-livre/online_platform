@extends('pages.master')

@section('title', 'Cadastro')

@section('header')
    @include('modules.header.navbar')
    @include('modules.header.titlebar', [
        'name' => 'Cadastro',
        'image' => 'https://placehold.it/1020x400'
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