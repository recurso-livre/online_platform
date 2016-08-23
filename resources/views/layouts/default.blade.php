@extends('layouts.master')

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
@endpush

@push('prescripts')
@endpush

@section('content')
    <div class="container">
        @yield('container')
    </div>
@endsection

@push('posscripts')
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endpush