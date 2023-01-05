@extends('base')

@section('page_title', 'Bonjours laravel')

@section('vite')
    @parent
    @vite(['resources/css/Linda.css'])
@endsection

@section('content')

    <h1>Bonjours laravel</h1>
    <p>Bienvenue au Restaurant O cnamo</p>
    <img class="medium-size" src="{{asset('https://www.istockphoto.com/fr')}}" alt="un de nos meilleurs visite">


@endsection
