@extends('layout.App')

@section('titulo')
Registro
@endsection

@section('contenido')
<div class="flex justify-center items-center m-auto border border-gray-800" style="width: 60%; height: 60vh;">
    <div class="w-1/2 h-full">
        <img src="{{asset('img/Registro.jpg')}}" alt="" class="h-full">
    </div>
    <div class="w-1/2 h-full flex justify-center">
        <form action="{{ route('Registro') }}" method="POST" class="w-96 h-full flex-col flex gap-2">
            @csrf
            <h1 class="text-center py-5 text-black font-semibold text-2xl">Registrate</h1>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Nombres" class="border border-gray-300 p-1 rounded-md">
            @error('name')
                <p class="bg-red-500 text-white p-1 rounded-sm text-sm text-center">{{ $message }}</p>
            @enderror
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" class="border border-gray-300 p-1 rounded-md">
            @error('email')
                <p class="bg-red-500 text-white p-1 rounded-sm text-sm text-center">{{ $message }}</p>
            @enderror
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Contraseña" class="border border-gray-300 p-1 rounded-md">
            @error('password')
                <p class="bg-red-500 text-white p-1 rounded-sm text-sm text-center">{{ $message }}</p>
            @enderror
            <label for="password">Repita Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Contraseña" class="border border-gray-300 p-1 rounded-md">
            <input type="submit" value="Registrarme" class="bg-blue-600 text-white rounded-md p-2 mt-5">
        </form>
    </div>

</div>
@endsection
