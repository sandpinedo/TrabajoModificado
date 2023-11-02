@extends('layout.App')

@section('titulo')
Home
@endsection

@section('contenido')
<h1 class="text-center">Vista home</h1>
@auth
    <h1>Hola, {{auth()->user()->name}}</h1>
@endauth
@endsection
