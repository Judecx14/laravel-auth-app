@extends('layouts.home')

@section('title', 'Login')

@section('content')


<div class="grid gap-4 mx-auto my-24 px-9 py-3 font-sans place-content-center max-h-fit  rounded-3xl w-1/3">
    <h1 class="text-3xl text-gray-600">Registro</h1>
    <form action="api/v1/signup" method="POST" class="mt-4 bg-transparent text-base ">

        @csrf
        <input type="email" class="border-b-2 p-2 my-2 bg-transparent border-violet-400 placeholder-violet-500 w-full" name="email" required placeholder="email">
        <input type="password" class="border-b-2 p-2 my-2 bg-transparent border-violet-400 placeholder-violet-500 w-full" name="password" required placeholder="contraseña">
        <input type="password" class="border-b-2 p-2 my-2 bg-transparent border-violet-400 placeholder-violet-500 w-full" name="password_confirmation" required placeholder="confirmar contraseña">
        <button class="border-2 border-purple-800 rounded-full bg-violet-700 hover:bg-violet-900 text-white w-full mt-8 h-10" type="submit">Registrarse</button>
    </form>
</div>

@endsection