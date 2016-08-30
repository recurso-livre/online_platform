@extends('layouts.master')

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-theme.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
@endpush

@push('prescripts')
@endpush

@push('posscripts')
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-3.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@endpush