@extends('base')

@section('page_title', 'Bonjours laravel')

@section('vite')
    @parent
    @vite(['resources/css/Linda.css'])
@endsection

@section('content')

    <h1>Bonjours laravel</h1>
    <p>Bienvenue au Restaurant O cnamo</p>


@endsection