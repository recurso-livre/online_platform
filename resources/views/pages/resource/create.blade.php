@extends('pages.master')

@push('posscripts')
    <script type="text/javascript" src="{{ asset('js/image-modal.js') }}"></script>
@endpush

@section('title', 'Cadastrar Recurso')

@section('header')
    @include('modules.header.navbar')
    @include('modules.header.titlebar', [
        'name' => 'Cadastrar Recurso',
    ])
@endsection

@section('content')
    <div class="container margin-tb-40">
        @include('modules.content.resource.create-copy')
    </div>
@endsection

@section('footer')
    @include('modules.footer.master')
@endsection