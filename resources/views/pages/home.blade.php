@extends('pages.master')

@section('title')
Cadastro
@endsection

@section('header')
    @include('modules.header.navbar')
    @include('modules.header.titlebar', [
        'name' => 'Cadastro',
        'image' => 'https://placehold.it/1020x400'
    ])
@endsection

@section('container')
    @include('modules.content.user.create')
@endsection

@section('footer')
    @include('modules.footer.master')
@endsection