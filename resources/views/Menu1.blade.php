@extends('base')

@section('page_title', 'hello laravel')

@section('vite')
    @parent
    @vite(['resources/css/Linda.css'])
@endsection

@section('content')

    <h1>Menu</h1>
    <p>Le menu1 des plats</p>


@endsection